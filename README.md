# Conserjeria-Project
Welcome to the repository of the Conserjeria-Project incident management system.

>[!CAUTION]
>Please read all the points of the README in order to make good use of the project. Thank you.

## Description
This project has been developed with the purpose of managing and controlling incidents reported in a hotel environment, allowing efficient monitoring by maintenance and management staff.

>[!NOTE]
>Our team is learning.

## Project structure
The project follows the structure of the MVC design pattern, which allows for better separation of responsibilities and makes code maintenance easier.

- **Model:** Manages the application logic and connects to the database to interact with incident data.

- **View:** It is responsible for representing the data to the user, using HTML and CSS.

- **Controller:** Handles communication between the model and the view, processing user requests and sending appropriate responses.

## Installation Requirements
In order to run this project locally, you need:

  1. XAMPP (or any other local server that supports PHP and MySQL)

  2. A modern web browser

  3. VSC Terminal

  4. Composer

### Installation
1. Clone this repository to your local directory:

```bash
  git clone https://github.com/Camposx/Conserjeria-Project.git
```

2. Copy the project folder to the XAMPP "htdocs" folder.

3. Import the database:
- Open phpMyAdmin.

- In SQL tab u can copy the next code and it will create the database and the table with default information.

  ```
      -- phpMyAdmin SQL Dump
      -- version 5.2.1
      -- https://www.phpmyadmin.net/
      --
      -- Host: 127.0.0.1
      -- Generation Time: Nov 17, 2024 at 01:28 PM
      -- Server version: 10.4.32-MariaDB
      -- PHP Version: 8.2.12
      
      SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
      START TRANSACTION;
      SET time_zone = "+00:00";
      
      
      /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
      /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
      /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
      /*!40101 SET NAMES utf8mb4 */;
      
      --
      -- Database: `malaga_waves_hotel_db`
      --
      DROP DATABASE IF EXISTS `malaga_waves_hotel_db`;
      CREATE DATABASE IF NOT EXISTS `malaga_waves_hotel_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
      USE `malaga_waves_hotel_db`;
      
      -- --------------------------------------------------------
      
      --
      -- Table structure for table `problems`
      --
      
      DROP TABLE IF EXISTS `problems`;
      CREATE TABLE `problems` (
        `id` int(11) NOT NULL,
        `room` varchar(5) NOT NULL,
        `issue` varchar(256) NOT NULL,
        `dateTime` date NOT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
      
      --
      -- Dumping data for table `problems`
      --
      
      INSERT INTO `problems` (`id`, `room`, `issue`, `dateTime`) VALUES
      (2, '98', 'there is a rat down of the bed', '2024-11-17'),
      (3, '101', 'Air conditioner not working', '2024-11-16'),
      (4, '303', 'TV remote is missing', '2024-11-15'),
      (5, '404', 'Water leakage in the bathroom', '2024-11-14'),
      (6, '505', 'Room door lock is jammed', '2024-11-13'),
      (7, '606', 'Lights are flickering', '2024-11-13'),
      (8, '707', 'No towels in the room', '2024-11-12'),
      (9, '808', 'The fridge is not cooling', '2024-11-12'),
      (10, '909', 'WIFI is not connecting', '2024-11-11');
      
      --
      -- Indexes for dumped tables
      --
      
      --
      -- Indexes for table `problems`
      --
      ALTER TABLE `problems`
        ADD PRIMARY KEY (`id`);
      
      --
      -- AUTO_INCREMENT for dumped tables
      --
      
      --
      -- AUTO_INCREMENT for table `problems`
      --
      ALTER TABLE `problems`
        MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
      COMMIT;
      
      /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
      /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
      /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
  ```

4. Start the Apache and MySQL server from the XAMPP control panel.

5. Access the incident system from your browser

## Guide
- In this quick guide you will learn about the main functionalities of our project:


1. In the main page you have information about the current incidents: Id, Room, Issue and the Date of the call.
![screenshot of our main page](/public/img/indexMalagaWavesHotel.png)
    - In addition there are 2 buttons next to each incident: 
      - The Delete button (The 🗑️ emoji): Deletes the selected incident. Simple, isn't it?
      - The Edit button (The 📝 emoji): Allows you to edit the room, issue and date of the selected incident.
  
2. If you want to add a new incident, you can do it by clicking on the "Add Issue" button.
![Our new calls form ](/public/img/form.png)
    - You will be redirected to a new page where you can fill in the required information: Room, Issue and Date of the call.
      - Once you have filled in the required information, you can submit the form by clicking on the "Create" button.
        - You will be again in the main page and see the new incident has been added.
      - If you want to reset the form, you can do it by clicking on the "Reset" button.
      - If you want to cancel the form, you can do it by clicking on the "Cancel" button.

3. If you want to edit an incident, you can do it by clicking on the "Edit" button mentioned earlier.
![Our edit form ](/public/img/editForm.png)
     - You'll be redirected to a new page where you can edit the Room, Issue and Date of the call.
        - Once you have edited the information you want, you can submit the form by clicking on the "Edit" button.
          - You'll be again in the main page and see the edited incident has been updated.

4. If you want to delete an incident, you can do it by clicking on the "Delete" button that i told you about before.
    - Once you have clicked on the "Delete" button, the incident will be deleted INSTANTLY and you WON'T HAVE THE OPTION TO RECOVER IT.

## Documentation
We have used different pages that have helped us in the creation of the project. I leave the links below:

>[!TIP]
>You can test our functions using `./vendor/bin/phpunit tests` in the terminal.

![image](https://github.com/user-attachments/assets/d35188bd-2cf2-4a30-8b25-a9c7ec893e82)

### Directory Structure
[screenshot of directory]

>[!IMPORTANT]
>We have downloaded the images and logos that we have used. If you want to change the logos or images, you must download them yourself.

## Technology
The project is developed using the following technologies:

<a href='#777BB4' target="_blank"><img alt='PHP' src='https://img.shields.io/badge/PHP-100000?style=for-the-badge&logo=PHP&logoColor=FFFFFF&labelColor=8892be&color=8892be'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='HTML5' src='https://img.shields.io/badge/HTML5-100000?style=for-the-badge&logo=HTML5&logoColor=white&labelColor=E34F26&color=E34F26'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='CSS3' src='https://img.shields.io/badge/CSS3-100000?style=for-the-badge&logo=CSS3&logoColor=white&labelColor=1572B6&color=1572B6'/></a>
<a href='#4479A1' target="_blank"><img alt='MySQL' src='https://img.shields.io/badge/MySQL-100000?style=for-the-badge&logo=MySQL&logoColor=white&labelColor=00758f&color=00758f'/></a>

- **Programming language:** PHP

- **Database: MySQL** (implemented via XAMPP)

- **Frontend:** HTML and CSS integrated into "php" files

- **Design pattern:** Model View Controller (MVC)

## Tools
The tools used for this project are:

<a href='visual studio code' target="_blank"><img alt='VSC' src='https://img.shields.io/badge/VSC-100000?style=for-the-badge&logo=VSC&logoColor=white&labelColor=0277BD&color=0277BD'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='Git' src='https://img.shields.io/badge/Git-100000?style=for-the-badge&logo=Git&logoColor=white&labelColor=F05032&color=F05032'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='GitHub' src='https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=GitHub&logoColor=white&labelColor=181717&color=181717'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='GitHub Pages' src='https://img.shields.io/badge/GitHub_Pages-100000?style=for-the-badge&logo=GitHub Pages&logoColor=white&labelColor=222222&color=222222'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='Bootstrap' src='https://img.shields.io/badge/Bootstrap-100000?style=for-the-badge&logo=Bootstrap&logoColor=white&labelColor=7952B3&color=7952B3'/></a>

## License
[Conserjeria-Proyect](https://github.com/Camposx/Conserjeria-Project)

## Our Team
- [@Alejandro](https://github.com/Camposx)
- [@Issam](https://github.com/issamchlf)
- [@Rebecca](https://github.com/rebecabernal)
- [@Manu](https://github.com/Manusitox360)
- [@Rene](https://github.com/mrene42)
