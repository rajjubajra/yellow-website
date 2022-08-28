fetch("https://yellow-website.com/yw-d9/jsonapi/node/invoice?include=field_bank_account,field_client_id_invoice,field_invoice_details,") // first step
  .then(response => response.json()) // second step
  .then(data => {
    console.log(data)
  })
  .catch(error => console.error(error))