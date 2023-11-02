<!DOCTYPE html>
<html lang="en">
@include('components.head', ['title' => 'Details'])
<head>
    <style>
        table {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 80%;
            margin: 0 auto;
            box-shadow:  7px 7px 5px #1f1f1f,
             -7px -7px 5px #292929;
            
        }
        .tableContent h2{
            padding: 2%;
        }

        td,
        th {
            border: 1px solid #424242;
            text-align: left;
            padding: 8px;
        }
        td:nth-child(1) {
            width: 50%;
            padding-left: 10px;
        }


        tr:nth-child(even) {
            background-color: #242424;
        }

        th {
            background-color: #E75E8D;
            color: white;
        }
    </style>
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    @include('components.preloader')
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    @include('components.header')
    <!-- ***** Header Area End ***** -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">

                    <!-- ***** Featured Start ***** -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="feature-banner header-text">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <img src="images/syllabus.png" alt="" style="border-radius: 23px; width: 350px;">
                                    </div>
                                    <div class="col-lg-8">
                                        <iframe style="width: 100%; height: 350px !important; border-radius: 23px; box-shadow:  11px 11px 4px #222222,
                                        -11px -11px 4px #262626;" src="https://www.youtube.com/embed/1-xdlbziBTU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Featured End ***** -->

                    <!-- ***** Physics Table Start ***** -->
                    <div class="row tableContent" style="padding-top: 5%; text-align: center;">
                        <div class="col-lg-12">
                            <h2>Physics Topics for JEE Main</h2>
                            <table>
                                <tr>
                                    <th>Physics Topics</th>
                                    <th>Number of Questions</th>
                                    <th>Marks-wise Weightage</th>
                                </tr>
                                <tr>
                                    <td>Electrostatics</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Current Electricity</td>
                                    <td>3</td>
                                    <td>9.9%</td>
                                </tr>
                                <tr>
                                    <td>Capacitors</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Magnetic Effect of Current and Magnetism</td>
                                    <td>2</td>
                                    <td>6.6%</td>
                                </tr>
                                <tr>
                                    <td>Alternating Current</td>
                                    <td>2</td>
                                    <td>6.6%</td>
                                </tr>
                                <tr>
                                    <td>Kinetic Theory of Gases & Thermodynamics</td>
                                    <td>2</td>
                                    <td>6.6%</td>
                                </tr>
                                <tr>
                                    <td>Simple Harmonic Motion</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Sound Waves</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Kinematics</td>
                                    <td>2</td>
                                    <td>6.6%</td>
                                </tr>
                                <tr>
                                    <td>Work, Energy, and Power</td>
                                    <td>2</td>
                                    <td>6.6%</td>
                                </tr>
                                <tr>
                                    <td>Laws of Motion</td>
                                    <td>2</td>
                                    <td>6.6%</td>
                                </tr>
                                <tr>
                                    <td>Centre of Mass</td>
                                    <td>2</td>
                                    <td>6.6%</td>
                                </tr>
                                <tr>
                                    <td>Rotational Dynamics</td>
                                    <td>2</td>
                                    <td>6.6%</td>
                                </tr>
                                <tr>
                                    <td>Modern Physics</td>
                                    <td>2</td>
                                    <td>6.6%</td>
                                </tr>
                                <tr>
                                    <td>Elasticity</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Wave Optics</td>
                                    <td>2</td>
                                    <td>6.6%</td>
                                </tr>
                                <tr>
                                    <td>Error in Measurement</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Circular Motion</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Electromagnetic Waves</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Semiconductors</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Communication Systems</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- ***** Physics Table End ***** -->

                    <!-- ***** Chemistry Table Start ***** -->
                    <div class="row tableContent" style="padding-top: 5%; text-align: center;" >
                        <div class="col-lg-12">
                            <h2>Chemistry Topics for JEE Main</h2>
                            <table>
                                <tr>
                                    <th>Chemistry Topics</th>
                                    <th>Number of Questions</th>
                                    <th>Marks-wise Weightage</th>
                                </tr>
                                <tr>
                                    <td>Transition Elements & Coordination Compounds</td>
                                    <td>3</td>
                                    <td>9.9%</td>
                                </tr>
                                <tr>
                                    <td>Periodic table, s and p-Block Elements</td>
                                    <td>3</td>
                                    <td>9.9%</td>
                                </tr>
                                <tr>
                                    <td>Thermodynamics & the Gaseous State</td>
                                    <td>2</td>
                                    <td>6.6%</td>
                                </tr>
                                <tr>
                                    <td>Atomic Structure</td>
                                    <td>2</td>
                                    <td>6.6%</td>
                                </tr>
                                <tr>
                                    <td>Chemical Bonding</td>
                                    <td>2</td>
                                    <td>6.6%</td>
                                </tr>
                                <tr>
                                    <td>Chemical and Ionic Equilibrium</td>
                                    <td>2</td>
                                    <td>6.6%</td>
                                </tr>
                                <tr>
                                    <td>Solid-State and Surface Chemistry</td>
                                    <td>2</td>
                                    <td>6.6%</td>
                                </tr>
                                <tr>
                                    <td>Nuclear & Environmental Chemistry</td>
                                    <td>2</td>
                                    <td>6.6%</td>
                                </tr>
                                <tr>
                                    <td>Mole Concept</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Redox Reactions</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Electrochemistry</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Chemical Kinetics</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Solution & Colligative Properties</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>General Organic Chemistry</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Stereochemistry</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Hydrocarbon</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Alkyl Halides</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Carboxylic Acids & Their Derivatives</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Carbohydrates, Amino Acids, and Polymers</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Aromatic Compounds</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- ***** Chemistry Table End ***** -->

                    <!-- ***** Mathematics Table Start ***** -->
                    <div class="row tableContent" style="padding-top: 5%; text-align: center;">
                        <div class="col-lg-12">
                            <h2>Mathematics Topics for JEE Main</h2>
                            <table>
                                <tr>
                                    <th>Mathematics Topics</th>
                                    <th>Number of Questions</th>
                                    <th>Marks-wise Weightage</th>
                                </tr>
                                <tr>
                                    <td>Quadratic Equations</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Sequences & Series</td>
                                    <td>2</td>
                                    <td>6.6%</td>
                                </tr>
                                <tr>
                                    <td>Trigonometric Equations</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Limits</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Differentiability</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Indefinite Integration</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Definite Integration</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Differential Equations</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>The Area under the Curve</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Straight Lines</td>
                                    <td>2</td>
                                    <td>6.6%</td>
                                </tr>
                                <tr>
                                    <td>Vectors</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>3D Geometry</td>
                                    <td>2</td>
                                    <td>6.6%</td>
                                </tr>
                                <tr>
                                    <td>Permutations & Combinations</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Probability</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Complex Numbers</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Binominal Theorem</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Determinants</td>
                                    <td>2</td>
                                    <td>6.6%</td>
                                </tr>
                                <tr>
                                    <td>Tangents and Normals</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Maxima and Minima</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Statistics</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Parabola</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Ellipse</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <td>Hyperbola</td>
                                <td>1</td>
                                <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Mathematical Reasoning</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Height & Distance</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                                <tr>
                                    <td>Sets</td>
                                    <td>1</td>
                                    <td>3.3%</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- ***** Mathematics Table End ***** -->

                </div>
            </div>
        </div>
    </div>

    @include('components.footer')

</body>

</html>