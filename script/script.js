fetch('get.php')
  .then(response => response.json())
  .then(data => {
    data.forEach(element => {
      console.log(element);
      const createP = document.createElement('p');
      createP.textContent = `${element.nom} ${element.prenom}`;
      document.body.appendChild(createP);
    });
  });