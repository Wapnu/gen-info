<?php
    $praFirstName = "Paul Reymart";
    $praLastName = "Abordo";
    $praMiddleIn = "C.";
    $praSection = "2ITD";
    $praStudentID = "2024204363";
    $prastudentEmail = "paulreymart.abordo.cics@ust.edu.ph";
    $praPersoEmail = "paulreymart13@gmail.com";
    $praTitle = "Junior | Web Designer";
    $praAddress = "Sun Residences, Welcome Rotonda, Quezon City";
    $praContactNumber = "9123456789";
    $praHobby1 = "Basketball";
    $praHobby2 = "Pickleball";
    $praHobby3 = "Reading";   
    $praHobby4 = "MTB";

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>General Information</title>

    <!-- CSS BOOTSTRAP -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container bg-secondary p-5">
        <div class="row">
            <!-- 1st Column --> 
            <div class="col-4 bg-warning text-center p-4 rounded">
                 <div class="row">  
                    <div class="col">
                        <img src="profilePic.png" alt="Profile Picture" class="rounded-circle w-75 mb-5">
                    </div>
                 </div>
                 <div class="row">
                    <div class="col">
                        <p class="h2 fw-bold"><?php echo $praFirstName . " " . $praMiddleIn . " " . $praLastName; ?></p>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col">
                        <p class="lead fw-semibold"><?php echo $praTitle; ?></p>
                    </div>
                 </div>


                <div class="row">
                    <div class="col">
                        <p class="lead">"quote"</p>
                    </div>
                </div>
                <!-- Details row -->
                 <div class="row">
                    <div class="col text-start bg-white my-3 rounded mx-3 p-3">
                        <h2 class="fw-bold">Details</h2>
                        <hr>
                        <p class="h5 fw-semibold">Section: <span class="fw-normal"><?php echo $praSection; ?></span></p>
                        <p class="h5 fw-semibold">Student ID: <span class="fw-normal"><?php echo $praStudentID; ?></span></p>
                        <p class="h5 fw-semibold">Student Email: <span class="fw-normal"><?php echo $prastudentEmail; ?></span></p>
                    </div>
                 </div>

                <!-- Info Card row -->
                <div class="row">
                    <div class="col mx-1 p-3">
                        <div class="card p-3 rounded text-center" style="background:#FCE6E6;">
                            <p class="h5 mb-1 fw-bold">Age: <span class="fw-normal">20</span></p>
                            <p class="h5 mb-1 fw-bold">Status: <span class="fw-normal">Single</span></p>
                            <p class="h5 mb-4 fw-bold">Occupation: <span class="fw-normal">Student</span></p>
                            <p class="h4 mb-1 fw-bold">Skills</p>
                            <hr class="my-2">
                            <div class="d-flex flex-wrap justify-content-center" style="gap:8px;">
                                <span class="h5 badge bg-danger">Web Design</span>
                                <span class="h5 badge bg-danger">Productive</span>
                                <span class="h5 badge bg-danger">Data Management</span>
                                <span class="h5 badge bg-danger">Networking</span>
                                <span class="h5 badge bg-danger">Mamba Mentality</span>
                                <span class="h5 badge bg-danger">Punctual</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- 2nd Column -->
            <div class="col bg-primary rounded">
                <div class="row text-center ">
                    <div class="col text-white">
                        <p class="display-3 fw-bold mt-3">General Information</p>
                        <hr>
                    </div>
                </div>
                
                <!-- Top bubble -->
                <div class="row">
                    <div class="col bg-white mt-1 rounded mx-2 p-2">
                        <p class="display-5 fw-bold">Bio</p>
                        <hr>
                        <p class="lead mt-1 fst-normal">I am a Junior Web Designer and 2nd-year IT student at UST with a deep focus on building functional, aesthetic digital experiences. Beyond the screen, I’m a basketball enthusiast who brings the same competitive spirit and teamwork from the court into my development projects. 
                            I’m currently sharpening my skills in PHP and modern web architecture to bridge the gap between creative design and robust backend systems.</p>
                    </div>

                    <div class="col bg-white mt-1 rounded mx-2 p-2">
                        <p class="display-6 fw-bold">Goals</p>
                        <hr>
                        <ul>
                            <li class="h5 fw-semibold">Master PHP</li>
                            <li class="h5 fw-semibold">Become a Senior Developer</li>
                            <li class="h5 fw-semibold">Become a Software Engineer</li>
                            <li class="h5 fw-semiboldA">Have a 6 digits income</li>
                        </ul>
                        <p class="display-6 fw-bold">Hobbies</p>
                        <hr>
                        <ul>
                            <li class="h5 fw-semibold"><?php echo $praHobby1; ?></li>
                            <li class="h5 fw-semibold"><?php echo $praHobby2; ?></li>
                            <li class="h5 fw-semibold"><?php echo $praHobby3; ?></li>
                            <li class="h5 fw-semibold"><?php echo $praHobby4; ?></li>
                        </ul>
                    </div>
                </div>

                <!-- Bottom Bubble -->
                <div class="row">
                    <div class="col bg-white my-5 rounded mx-2 p-2">
                        <p class="display-6 fw-bold">Motivation</p>
                        <hr>
                        <p class="lead mt-1 fst-normal">I am fueled by the constant evolution of technology and the pursuit of excellence. My motivation is to transform from a junior designer into an industry-leading Software Engineer who creates impact at scale. 
                            I thrive on the discipline required to master new languages and the hustle needed to reach the top tier of the tech profession.</p>
                    </div>

                    <div class="col bg-white my-5 rounded mx-2 p-2">
                        <p class="display-6 fw-bold">Contact Me</p>
                        <hr>
                        <ul>
                            <li class="h5 fw-bold">Contact#: +63 <span class="fw-normal"><?php echo $praContactNumber; ?></span></li>
                            <li class="h5 fw-bold">Email: <span class="fw-normal"><?php echo $praPersoEmail; ?></span></li>
                            <li class="h5 fw-bold">Address: <span class="fw-normal"><?php echo $praAddress; ?></span></li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>




    </div>
    

<!-- SCRIPT BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>