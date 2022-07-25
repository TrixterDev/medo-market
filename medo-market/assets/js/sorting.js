// SORTIRING-DROP
let sor = document.querySelector('.cardiogram__sorting');
let slist = document.querySelector('.cardiogram__sorting-content');

const toggleslist = () => {
  sor.classList.toggle('is-active');
  slist.classList.toggle('is-active');
}

sor.addEventListener('click', e => {
  e.stopPropagation();

  toggleslist();
});

document.addEventListener('click', e => {
  let target = e.target;
  let its_slist = target == slist || slist.contains(target);
  let its_sor = target == sor;
  let slist_is_active = slist.classList.contains('is-active');
  
  if (!its_slist && !its_sor && slist_is_active) {
    toggleslist();
  }
}); 
// SORTIRING-DROP