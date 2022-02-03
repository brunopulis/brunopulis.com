module.exports = function dateFilter(value) {
  const dateObject = new Date(value);

  const months = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
  const days = dateObject.getDate();

  return `${days} ${months[dateObject.getMonth()]} ${dateObject.getFullYear()}`;
};
