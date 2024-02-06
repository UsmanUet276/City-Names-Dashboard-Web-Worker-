# City Names Dashboard

### Project Description: 

This project is a City Names Dashboard built with HTML, Tailwind CSS, and JavaScript. It provides a simple interface to fetch and display city names. Users can choose to process the city names either with or without a Web Worker.

### Instructions to Run Locally (using XAMPP)

1. Install XAMPP: Download and install XAMPP from https://www.apachefriends.org/index.html based on your operating system.
2. Importing SQL File in phpMyAdmin: Access phpMyAdmin by navigating to `http://localhost/phpmyadmin` in your browser. Create a new database, e.g., 'new'. Import the provided SQL file into the newly created database.
3. Changing Database Configuration in database.php: Open 'database.php' and update the database connection parameters based on your XAMPP setup (username, password, database name). Save the changes.
4. Accessing the City Names Dashboard: Place the 'index.php' file in the 'htdocs' directory of your XAMPP installation (e.g., `C:\xampp\htdocs\`). Open your web browser and navigate to `http://localhost/index.php`.

### Performance Improvements with Web Workers:

Web Workers are used to perform tasks in the background without affecting the main thread. In this project, the option to process city names with or without a Web Worker is provided. When using a Web Worker, the main thread remains responsive, enhancing the user experience during data processing.

### Challenges Faced and Solutions:

1. **Web Worker Communication:** Communicating between the main thread and the Web Worker requires message passing. Handling this communication and ensuring proper termination of the worker were crucial.
2. **Sorting City Names:** Sorting city names without a Web Worker can be computationally expensive for large datasets. With a Web Worker, this task can be offloaded to a separate thread, preventing UI freezing during sorting.

### Published Application

Link: https://develpment.wuaze.com/dev/worker

### Research Paper By Me

This is research paper by me: https://medium.com/@ubf16371/leveraging-web-workers-for-enhanced-performance-and-user-experience-877aa3afbcf9

## References/Resources:

- Mozilla Developer Network (MDN) - Web Workers: https://developer.mozilla.org/en-US/docs/Web/API/Web_Workers_API
- Chrome Developers Guide on Using Web Workers: https://web.dev/articles/off-main-thread
- Tailwind CSS Documentation: https://tailwindui.com/documentation
- Stack Overflow for specific coding challenges.
