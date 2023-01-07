<!DOCTYPE html>
<?php
include('components\header.php');
include('components\navbar.php');
?>

<style>
    #profilePic {
        height: auto;
        width: 140px;
        margin-bottom: 6px;
    }
</style>



<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-2">
                <img id="profilePic"
                    src="https://uxwing.com/wp-content/themes/uxwing/download/peoples-avatars/no-profile-picture-icon.png"
                    alt="">
                <p style="font-weight: 600;">Sanjiv Kumar Jaiswal</p>
            </div>
            <div class="col-9">
                <div class="card border-success">
                    <div class="card-header bg-success">
                        About
                        <i class="fa-solid fa-pencil" style="float: right; cursor: pointer;" data-bs-toggle="modal"
                            data-bs-target="#aboutModal"></i>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita quam
                            sequi aliquid earum eligendi optio exercitationem quod. Perferendis nam esse iste ad quod,
                            impedit temporibus earum, placeat laudantium vitae ipsum?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-sm-2">
            <div class="card border-primary" style="width: 18rem;">
                <div class="card-header bg-primary">
                    Skills
                    <i class="fa-solid fa-pencil" style="float: right; cursor: pointer;" data-bs-toggle="modal"
                        data-bs-target="#skillModal"></i>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">SEO</li>
                    <li class="list-group-item">Content Writing</li>
                    <li class="list-group-item">WordPress</li>
                    <li class="list-group-item">Photoshop</li>
                </ul>
            </div>
            <br><br>
            <div class="row">
                <div class="col">
                    <div class="card border-warning" style="width: 18rem;">
                        <div class="card-header bg-warning">
                            Education
                            <i class="fa-solid fa-pencil" style="float: right; cursor: pointer;" data-bs-toggle="modal"
                                data-bs-target="#eduModal"></i>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">BSc.CSIT/Present</li>
                            <li class="list-group-item">+2/2078</li>
                            <li class="list-group-item">SEE/2075</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-7" style="margin-left: 4%;">
            <div class="card">
                <h5 class="card-header">Experience
                    <i class="fa-solid fa-pencil" style="float: right; cursor: pointer;" data-bs-toggle="modal"
                        data-bs-target="#expModal"></i>
                </h5>
                <div class="card-body border-bottom">
                    <h5 class="card-title">Working on own projects</h5>
                    <p class="card-text">I'm currently working on my own projects.</p>
                    <p class="card-text"><i><strong>Duration:</strong> November 2022 - Present</i></p>

                </div>
                <div class="card-body border-bottom">
                    <h5 class="card-title">Content Analyst</h5>
                    <p class="card-text">I previously worked as an esports content analyst for one of the world's
                        largest sports publishers.</p>
                    <p class="card-text"><i><strong>Duration:</strong> March 2022 - October 2022</i></p>

                </div>
            </div>
        </div>

    </div>


    <!-- modals -->
    <!-- about modal -->
    <div class="modal fade" id="aboutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit about</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- skills modal  -->
    <div class="modal fade" id="skillModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add skill</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- education modal  -->
    <div class="modal fade" id="eduModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add education</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-warning">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- experience modal  -->
    <div class="modal fade" id="expModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add experience</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


</body>
<?php
include('components\footer.php');
?>

</html>