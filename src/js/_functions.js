
import 'simplebar';

import AOS from 'aos';
AOS.init();

import { validateForms } from './functions/validate-forms';
const rules1 = [
    {
        ruleSelector: 'input[name="name"]',
        rules: [
          {
            rule: 'required',
            value: true,
            errorMessage: 'Заполните имя!'
          }
        ]
      },
      {
        ruleSelector: 'input[name="email"]',
        rules: [
          {
            rule: 'required',
            value: true,
            errorMessage: 'Заполните Email!'
          },
          {
            rule: 'email',
            value: true,
            errorMessage: 'Введите корректный Email!'
          }
        ]
      },
];

const fileInput = document.querySelector('input[type="file"]');

fileInput.addEventListener('change', (e) => {
	let files = e.currentTarget.files;
	console.log(files);

	if (files.length) {
		fileInput.closest('label').querySelector('span').textContent = files[0].name;
	} else {
		fileInput.closest('label').querySelector('span').textContent = 'Прикрепить файл';
	}

});

validateForms('#main-form', rules1);
