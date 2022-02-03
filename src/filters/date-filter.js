module.exports = function dateFilter(value) {
  const options = { year: "numeric", month: "long", day: "numeric" };
  const dateObject = new Date(value);
  
  dateObject.toLocaleDateString("pt-br", options);
  
  let formattedDate = dateObject.toLocaleDateString("pt-br", { ...options, month: 'numeric' });

  const months = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
  const days = dateObject.getDate();

  // return `${days} ${months[dateObject.getMonth()]} ${dateObject.getFullYear()}`;
  return formattedDate;
};
