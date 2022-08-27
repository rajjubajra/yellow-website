fetch("https://yellow-website.com/yw-d9/jsonapi/node/invoice?include=field_bank_account") // first step
  .then(response => console.log(response.json())) // second step
  .catch(error => console.error(error))