# Real-Time Tax Deduction and Will Approval System

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

The Real-Time Tax Deduction and Will Approval System is an innovative platform designed to enhance tax collection 
efficiency while combating tax evasion for shops and businesses. This system allows shops to list products with interest 
rates and generate invoices for customers. At the time of payment, the interest amount is automatically deducted and 
transferred directly to the government account, while the actual money without interest is credited to the shopkeeper's account. 
Additionally, the system generates the invoice after successful payment, ensuring transparent financial transactions.

## Key Features

- **Real-time Tax Deduction:** The system instantly calculates and deducts the applicable interest rate at the time of payment, streamlining the tax collection process for the government.

- **Secure Payments:** The platform ensures secure payment transactions, protecting both customers and shopkeepers from financial fraud and unauthorized access.

- **Automatic Invoice Generation:** Invoices are automatically generated after successful payments, simplifying the billing process for both customers and shopkeepers.

- **Enhanced Tax Collection:** By directly depositing the interest into the government account, this system significantly improves tax collection efficiency and reduces the possibility of tax evasion.

- **User-Friendly Interface:** The system features an intuitive and user-friendly interface, making it easy for shopkeepers and customers to navigate and conduct transactions.
## Screenshots
![image](https://github.com/ajeetram/Real_Time_Tax_Deduction/assets/86039147/af607a9c-5176-4e4a-ae8a-730bdf4bfe74) 
![image](https://github.com/ajeetram/Real_Time_Tax_Deduction/assets/86039147/ba3ab41e-9e69-451c-8c74-eac463bd2a33)
![image](https://github.com/ajeetram/Real_Time_Tax_Deduction/assets/86039147/eeeb622b-d17e-4abd-9bbc-41640a7ac1b4)
![image](https://github.com/ajeetram/Real_Time_Tax_Deduction/assets/86039147/447102ba-4850-4514-a06e-76877f1c3258)
![image](https://github.com/ajeetram/Real_Time_Tax_Deduction/assets/86039147/8eebbf6f-1226-4861-9da1-61416f7aff0a)
![image](https://github.com/ajeetram/Real_Time_Tax_Deduction/assets/86039147/5b4015c8-efe3-4a0a-92d5-2fa5e8fe2bcf)
![image](https://github.com/ajeetram/Real_Time_Tax_Deduction/assets/86039147/de7811a8-efde-4279-a4e0-5cd92198888c)
![image](https://github.com/ajeetram/Real_Time_Tax_Deduction/assets/86039147/414f68ce-afc4-4c5a-a312-1c219e7b8940)
![image](https://github.com/ajeetram/Real_Time_Tax_Deduction/assets/86039147/7ded4c75-6b4c-421a-a59f-f07ec5a3e953)



## Technologies Used

- **Backend:** PHP with MySQL
- **Frontend:** HTML, CSS, JavaScript
- **Payment Gateway Integration:** Razor Pay API


## Setup Instructions

1. Clone the repository:

```bash
git clone https://github.com/ajeetram/real-time-tax-system.git
```
2. Navigate to the project directory:

```bash
cd Real_Time_Tax_Deduction
```
3. Import the MySQL database:

- Create a MySQL database named `Real_Time_Tax_Deduction.`
- Import the SQL dump provided in `Real_Time_Tax_Deduction/database` to set up the required tables.
  
4. Set up the configuration file:

- Navigate to `config/config.php.`
- Configure your database connection settings and Razor Pay API keys.
5. Run the application:

- Deploy the PHP files to a PHP-enabled server or use XAMPP/WAMP for local development.
- Access the application in your browser at `http://localhost:3000/`.



