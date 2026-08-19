/**
 * Shared AJAX submission handler for Bright Dreamers full-page forms.
 */
(function () {
  'use strict';

  var config = window.bdcForms || {};
  var ajaxUrl = config.ajaxUrl || '/wp-admin/admin-ajax.php';
  var homeUrl = config.homeUrl || '/';

  function escapeHtml(value) {
    return String(value)
      .replace(/&/g, '&amp;')
      .replace(/</g, '&lt;')
      .replace(/>/g, '&gt;')
      .replace(/"/g, '&quot;');
  }

  function findFieldWrapper(field) {
    return (
      field.closest('.contact-field') ||
      field.closest('.apply-check') ||
      field.closest('.apply-checklist') ||
      field.closest('.donation-support-fieldset') ||
      field.closest('.newsletter-fieldset') ||
      field.closest('.media-consent-options') ||
      field.closest('.apply-section') ||
      field.parentElement
    );
  }

  function clearFieldErrors(form) {
    form.querySelectorAll('.bdc-form-error').forEach(function (node) {
      node.remove();
    });

    form.querySelectorAll('.is-invalid').forEach(function (node) {
      node.classList.remove('is-invalid');
    });
  }

  function showFieldErrors(form, errors) {
    Object.keys(errors).forEach(function (fieldName) {
      var message = errors[fieldName];
      var selector = '[name="' + fieldName + '"], [name="' + fieldName + '[]"]';
      var field = form.querySelector(selector);

      if (!field) {
        return;
      }

      var wrapper = findFieldWrapper(field);

      if (wrapper) {
        wrapper.classList.add('is-invalid');
      }

      field.classList.add('is-invalid');

      var error = document.createElement('p');
      error.className = 'bdc-form-error';
      error.setAttribute('role', 'alert');
      error.textContent = message;

      if (wrapper) {
        wrapper.appendChild(error);
      } else {
        field.insertAdjacentElement('afterend', error);
      }
    });
  }

  function buildSuccessMarkup(message) {
    var title = message.title || 'Thank you!';
    var lead = message.lead || '';
    var text = message.text || '';
    var tagline = message.tagline || 'Dream • Create • Grow • Give';
    var note = message.note || '';

    return (
      '<div class="bdc-form-success newsletter-page-success" role="status" aria-live="polite">' +
      '<p class="newsletter-page-success__title">' +
      escapeHtml(title) +
      '</p>' +
      (lead ? '<p class="newsletter-page-success__lead">' + escapeHtml(lead) + '</p>' : '') +
      (text ? '<p class="newsletter-page-success__text">' + escapeHtml(text) + '</p>' : '') +
      '<p class="newsletter-page-success__tagline">' +
      escapeHtml(tagline) +
      '</p>' +
      '<a class="btn btn--solid btn--lg btn-hover newsletter-page-success__btn" href="' +
      escapeHtml(homeUrl) +
      '">Back to Home</a>' +
      (note ? '<p class="newsletter-page-success__note">' + escapeHtml(note) + '</p>' : '') +
      '</div>'
    );
  }

  function getSubmitButton(form) {
    if (form.id) {
      var external = document.querySelector('[form="' + form.id + '"][type="submit"]');
      if (external) {
        return external;
      }
    }

    return form.querySelector('[type="submit"]');
  }

  function setSubmitting(form, isSubmitting) {
    var button = getSubmitButton(form);

    if (!button) {
      return;
    }

    if (isSubmitting) {
      button.dataset.bdcOriginalText = button.innerHTML;
      button.disabled = true;
      button.setAttribute('aria-busy', 'true');

      if (button.tagName === 'BUTTON') {
        button.textContent = 'Sending...';
      }
    } else {
      button.disabled = false;
      button.removeAttribute('aria-busy');

      if (button.dataset.bdcOriginalText) {
        button.innerHTML = button.dataset.bdcOriginalText;
      }
    }
  }

  function showFormLevelError(form, message) {
    var existing = form.querySelector('.bdc-form-error--global');

    if (existing) {
      existing.remove();
    }

    var error = document.createElement('p');
    error.className = 'bdc-form-error bdc-form-error--global';
    error.setAttribute('role', 'alert');
    error.textContent = message;
    form.insertAdjacentElement('afterbegin', error);
  }

  function handleSuccess(form, message) {
    var host =
      form.closest('.newsletter-form-wrap') ||
      form.closest('.apply-form__main') ||
      form.closest('.contact-form__main') ||
      form.closest('.donation-form-card') ||
      form.closest('.media-policy-content') ||
      form.parentElement;

    form.hidden = true;
    form.setAttribute('aria-hidden', 'true');

    var partnerFooterBar = document.querySelector('.partner-footer-bar');
    if (partnerFooterBar) {
      partnerFooterBar.hidden = true;
      partnerFooterBar.setAttribute('aria-hidden', 'true');
    }

    var success = document.createElement('div');
    success.className = 'bdc-form-success-wrap';
    success.innerHTML = buildSuccessMarkup(message || {});

    if (host) {
      host.appendChild(success.firstChild);
    } else {
      form.insertAdjacentElement('afterend', success.firstChild);
    }

    var status = (host || document).querySelector('.bdc-form-success');
    if (status) {
      status.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
  }

  function handleSubmit(event) {
    var form = event.currentTarget;

    event.preventDefault();
    clearFieldErrors(form);

    if (!form.checkValidity()) {
      form.reportValidity();
      return;
    }

    var formData = new FormData(form);
    formData.set('action', 'bdc_submit_form');

    if (!formData.get('form_id')) {
      formData.set('form_id', form.getAttribute('data-form-id') || '');
    }

    setSubmitting(form, true);

    fetch(ajaxUrl, {
      method: 'POST',
      body: formData,
      credentials: 'same-origin',
    })
      .then(function (response) {
        return response
          .json()
          .catch(function () {
            return {
              success: false,
              message: 'Something went wrong. Please try again.',
            };
          })
          .then(function (payload) {
            return {
              ok: response.ok,
              payload: payload,
            };
          });
      })
      .then(function (result) {
        setSubmitting(form, false);

        if (result.payload && result.payload.success) {
          handleSuccess(form, result.payload.message);
          return;
        }

        if (result.payload && result.payload.errors) {
          showFieldErrors(form, result.payload.errors);
        }

        showFormLevelError(
          form,
          (result.payload && result.payload.message) || 'Something went wrong. Please try again.'
        );
      })
      .catch(function () {
        setSubmitting(form, false);
        showFormLevelError(form, 'Network error. Please check your connection and try again.');
      });
  }

  function init() {
    document.querySelectorAll('form[data-form-id]').forEach(function (form) {
      form.addEventListener('submit', handleSubmit);
    });

    var params = new URLSearchParams(window.location.search);
    var emailParam = params.get('email');

    if (emailParam) {
      document.querySelectorAll('form[data-form-id="newsletter_signup"] input[name="email"]').forEach(function (field) {
        field.value = emailParam;
      });
    }
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
