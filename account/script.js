fetch("https://yellow-website.com/yw-d9/jsonapi/node/invoice") // first step
  .then(response => response.json()) // second step
  .then(data => {
    console.log(data)
  })
  .catch(error => console.error(error))