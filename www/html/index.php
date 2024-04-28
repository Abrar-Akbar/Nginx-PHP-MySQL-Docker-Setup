<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevOps & AWS Automation</title>
    <!-- Include any necessary CSS or JavaScript libraries -->
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            text-align: center;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
        section {
            padding: 20px;
            margin: 20px 0;
            background-color: #f9f9f9;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to DevOps & AWS Automation</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#devops">DevOps</a></li>
            <li><a href="#devops_tools">DevOps Tools</a></li>
            <li><a href="#automation">Automation</a></li>
            <li><a href="#aws_cloud">AWS Cloud</a></li>
        </ul>
    </nav>

    <section id="devops">
        <h2>DevOps</h2>
        <p>DevOps is a set of practices that combines software development (Dev) and IT operations (Ops). It aims to shorten the systems development life cycle and provide continuous delivery with high software quality.</p>
        <p>In a DevOps culture, collaboration, automation, and measurement are key principles to achieve rapid delivery of software products and services.</p>
        <img src="images/devops_image.jpg" alt="DevOps Image">
    </section>

    <section id="devops_tools">
        <h2>DevOps Tools</h2>
        <p>DevOps tools help automate the software development lifecycle and streamline collaboration between development and operations teams. Some popular DevOps tools include:</p>
        <ul>
            <li>Jenkins</li>
            <li>Docker</li>
            <li>Kubernetes</li>
            <li>Ansible</li>
            <li>Puppet</li>
            <li>Chef</li>
        </ul>
        <p>These tools enable continuous integration, continuous delivery, infrastructure as code, and other DevOps practices.</p>
        <img src="images/devops_tools_image.jpg" alt="DevOps Tools Image">
    </section>

    <section id="automation">
        <h2>Automation</h2>
        <p>Automation is the process of automatically performing tasks without human intervention. In DevOps, automation is crucial for:</p>
        <ul>
            <li>Automating builds, tests, and deployments</li>
            <li>Provisioning and managing infrastructure</li>
            <li>Monitoring and scaling applications</li>
        </ul>
        <p>By automating repetitive tasks, organizations can increase efficiency, reduce errors, and accelerate the software delivery process.</p>
        <img src="images/automation_image.jpg" alt="Automation Image">
    </section>

    <section id="aws_cloud">
        <h2>AWS Cloud</h2>
        <p>Amazon Web Services (AWS) is a leading cloud computing platform offering a wide range of services to help businesses build and deploy scalable, secure, and cost-effective applications.</p>
        <p>Key AWS services include:</p>
        <ul>
            <li>Amazon EC2 (Elastic Compute Cloud)</li>
            <li>Amazon S3 (Simple Storage Service)</li>
            <li>Amazon RDS (Relational Database Service)</li>
            <li>Amazon Lambda</li>
            <li>Amazon ECS (Elastic Container Service)</li>
        </ul>
        <p>With AWS, organizations can leverage on-demand infrastructure, serverless computing, and a variety of managed services to innovate and grow their businesses.</p>
        <img src="images/aws_cloud_image.jpg" alt="AWS Cloud Image">
    </section>
</section>

    <section id="contact"> <!-- Added Contact section -->
        <h2>Contact Us</h2>
        <form action="submit_contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="4" required></textarea><br><br>
            <input type="submit" value="Submit">
        </form>
    </section>

    <section id="dynamic_content"> <!-- Added section for dynamic content -->
        <h2>Dynamic Content</h2>
        <p>This section will display dynamic content fetched from a database.</p>
        <?php
        // Example of fetching dynamic content from a database
        // Replace this with actual database querying code
        $db_content = [
            ["title" => "Blog Post 1", "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit."],
            ["title" => "Blog Post 2", "content" => "Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas."]
        ];

        foreach ($db_content as $post) {
            echo "<h3>{$post['title']}</h3>";
            echo "<p>{$post['content']}</p>";
        }
        ?>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> DevOps & AWS Automation. All rights reserved. Designed by Abrar Akbar (DevOps Engineer).</p>
    </footer>
</body>
</html>
