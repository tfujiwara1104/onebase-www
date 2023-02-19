module.exports = {
  root: true,
  env: {
    browser: true,
    es2020: true,
  },
  parserOptions: {
    sourceType: 'module',
  },
  extends: ['eslint:recommended'],
  rules: {
    'prefer-const': 'error',
  },
  globals: {
    $: true,
    jquery: true,
    utils: true,
    velocity: true,
  },
};
