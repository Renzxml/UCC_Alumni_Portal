@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="contact-section py-5">
    <div class="container">

        <!-- Title -->
        <h1 class="text-center fw-bold mb-4">Contact Us</h1>

        <!-- Location Section -->
        <div class="card shadow-sm mb-5">
            <div class="card-body">
                <h5 class="fw-bold mb-3 text-success fs-3">
                    <i class="bi bi-geo-alt-fill text-danger"></i> Location:
                </h5>
    
                    <p class="fw-bold fs-3">
                        Biglang Awa St Cor 11th Ave Cattleya, Grace Park East, 
                        Caloocan, 1400 Metro Manila, Philippines
                    </p>

                <!-- Google Map -->
                <div class="ratio ratio-16x9">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4578.776101838476!2d120.99215487574199!3d14.653446175779452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b686dd24e859%3A0xe442b57504cbf05f!2sUniversity%20of%20Caloocan%20City%20-%20South%20Campus!5e1!3m2!1sen!2sph!4v1757176776473!5m2!1sen!2sph"
                        style="border:0;" allowfullscreen="" loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

            </div>
        </div>

        <!-- Colleges Directory -->
        <div class="card shadow-sm mb-5">
            <div class="card-body">
                <h4 class="fw-bold mb-3">Colleges Directory</h4>
                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Graduate School</td>
                                <td>uccgraduateschool@ucc-caloocan.edu.ph</td>
                            </tr>
                            <tr>
                                <td>College of Liberal Arts and Sciences</td>
                                <td>clas@ucc-caloocan.edu.ph</td>
                            </tr>
                            <tr>
                                <td>College of Law</td>
                                <td>collegeoflaw@ucc-caloocan.edu.ph</td>
                            </tr>
                            <tr>
                                <td>College of Education</td>
                                <td>coe@ucc-caloocan.edu.ph</td>
                            </tr>
                            <tr>
                                <td>College of Criminal Justice Education</td>
                                <td>ccje@ucc-caloocan.edu.ph</td>
                            </tr>
                            <tr>
                                <td>College Business and Accountancy</td>
                                <td>cba@ucc-caloocan.edu.ph</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Offices Directory -->
        <div class="card shadow-sm">
            <div class="card-body">
                <h4 class="fw-bold mb-3">Offices Directory</h4>
                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Office of the Registrar</td>
                                <td>registrar@ucc-caloocan.edu.ph</td>
                            </tr>
                            <tr>
                                <td>MIS</td>
                                <td>mis@ucc-caloocan.edu.ph</td>
                            </tr>
                            <tr>
                                <td>Library</td>
                                <td>library@ucc-caloocan.edu.ph</td>
                            </tr>
                            <tr>
                                <td>Guidance and Counselling</td>
                                <td>ucc.counselors@gmail.com</td>
                            </tr>
                            <tr>
                                <td>Clinic</td>
                                <td>ucccampusclinic@gmail.com</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection


