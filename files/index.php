<?php
session_start();
?>

<?php
include('header.php');
?>

<style>
    img {
        margin-top: 0%;
    }

    body {
        background-color: #7ba7ef;
        color: #d18fe1;
    }
</style>

<script>
    document.getElementById("n1").style.background = "rgb(244, 68, 209)";
</script>

<section id="mainbanner">
    <div>
        <img src="img/BANNER.png" class="iw" alt="abc" style="margin-top: 0px;">
    </div>
</section>

<section id="top-category" style="margin-top: 25px;">
    <div>
        <table>
            <tr>
                <td>
                    <h2 id="top-heading">Our Top Subjects</h2>
                </td>
            </tr>
            <tr>
                <td><img src="img/python.png" alt="first_img" width="300" height="300" class="top-category-img-r1"></td>
                <td><img src="img/java.png" alt="first_img" width="300" height="300" class="top-category-img-r1"></td>
                <td><img src="img/dbms.png" alt="first_img" width="300" height="300" class="top-category-img-r1"></td>
                <td><img src="img/ruby.png" alt="first_img" width="300" height="300" class="top-category-img-r1"></td>
            </tr>
            <tr>
                <td>
                    <h4 class="top-category-name">Python</h4>
                </td>
                <td>
                    <h4 class="top-category-name">Java</h4>
                </td>
                <td>
                    <h4 class="top-category-name">Dbms</h4>
                </td>
                <td>
                    <h4 class="top-category-name">Ruby</h4>
                </td>
            </tr>
            <tr>
                <td><img src="img/flask.png" alt="first_img" width="300" height="300" class="top-category-img-r2"></td>
                <td><img src="img/c++.png" alt="first_img" width="300" height="300" class="top-category-img-r2"></td>
                <td><img src="img/swift.png" alt="first_img" width="300" height="300" class="top-category-img-r2"></td>
                <td><img src="img/kotlin.png" alt="first_img" width="300" height="300" class="top-category-img-r2"></td>
            </tr>
            <tr>
                <td>
                    <h4 class="top-category-name">Flask</h4>
                </td>
                <td>
                    <h4 class="top-category-name">C++</h4>
                </td>
                <td>
                    <h4 class="top-category-name">Swift</h4>
                </td>
                <td>
                    <h4 class="top-category-name">Kotlin</h4>
                </td>
            </tr>
        </table>
    </div>
</section>

<?php
include('footer.php');
?>