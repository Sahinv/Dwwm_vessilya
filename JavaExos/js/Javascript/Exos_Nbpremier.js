function nbrPremier(nbr) {
    for(var i = 2; i < nbr; i++)
      if(nbr%i === 0) return false;
    return nbr > 1;
  }
  if (nbrPremier()==true){
      alert("Cest un nombre premier");
  }

  console.log(nbrPremier(32))

  