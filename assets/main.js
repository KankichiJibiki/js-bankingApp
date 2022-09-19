const config = {
    initialForm: document.getElementById('initial-form'),
    bankPage: document.getElementById('bankPage'),
    sidePage: document.getElementById('sidePage'),
}

class BankAccount
{
    constructor(first_name, last_name, bank_id, firstDeposit, account_type){
        this.first_name = first_name;
        this.last_name = last_name;
        this.bank_id = this.getRandom(1, Math.pow(10, 8)) + "-" + bank_id;
        this.firstDeposit = firstDeposit;
        this.account_type = account_type;
    }

    getRandom(min, max){
        return Math.floor(Math.random() * (max-min)) + min;
    }

    getFullName(){
        return this.first_name + " " + this.last_name;
    }
}

function initializeUserAccount(){
    let bankForm = document.getElementById('bank-form');
    let userAccount = new BankAccount(bankForm.querySelectorAll('input[name="first_name"]').item(0).value, bankForm.querySelectorAll('input[name="last_name"]').item(0).value, bankForm.querySelectorAll('input[name="bank_id"]').item(0).value, bankForm.querySelectorAll('input[name="initialDeposit"]').item(0).value, bankForm.querySelectorAll('input[name="accountType"]').item(0).value);

    console.log(userAccount);
}