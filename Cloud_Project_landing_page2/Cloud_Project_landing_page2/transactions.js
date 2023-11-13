const transactions = [
  { date: '2023-10-01', description: 'Deposit', type: 'deposit', amount: 1000 },
  { date: '2023-10-05', description: 'Withdrawal', type: 'withdrawal', amount: -500 },
  { date: '2023-10-10', description: 'Transfer', type: 'transfer', amount: -200 },
  
]


function filterTransactions() {
  const transactionType = document.getElementById('transaction-type').value;
  const startDate = document.getElementById('startdate').value;
  const endDate = document.getElementById('enddate').value;

  let filteredTransactions = transactions;

  if (startDate && endDate) {
    filteredTransactions = filteredTransactions.filter((transaction) => {
      const transactionDate = new Date(transaction.date);
      return transactionDate >= new Date(startDate) && transactionDate <= new Date(endDate);
    });
  }

  
  displayTransactions(filteredTransactions);
}


const Button = document.getElementById('Get_button');
Button.addEventListener('click', filterTransactions);



