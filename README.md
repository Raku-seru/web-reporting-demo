# Demo Web CRUD Reporting with PDF make support

<h2>Repository for Demo Web Application - Admin Dashboard Reporting with PDF maker/dompdf support</h2>
<p>Created on 06-06-2021 by [Raxel AK] (https://github.com/Raku-Seru).</p>
<br>
<hr>
<em>Last Updated : [03/07/2021 21:46]</em>
<em>Build Version : 1.0.9a 030721</em>
<br>
Link to Herokuapp : <a href="http://evening-falls-47537.herokuapp.com">http://evening-falls-47537.herokuapp.com</a>
<hr>

## About This Project
<p>Repository ini ditujukan untuk developing demonstrasi website CRUD report user dan dapat dilihat oleh Admin dan di download dalam bentuk PDF.</p>
<br>

## <em> Work In Progress : </em>
<ul>
<li> Menambah fitur show report (optional)</li>
<li> Session status</li>
<li> Optimalisasi file dist agar performa lebih cepat</li>
</ul>
<hr>

## <em> Past Progress </em>

[up to 03/07/2021 21:46] [ Status : Deployed / On Development ver 1.0.9a] <em>RaxelAK</em>

+ Done menambah route API / RESTful tested di Postman
+ Done membuat session table/migration (yet implemented in further uses)

[up to 29/06/2021 16:55] [ Status : On Development ver 1.0.9] <em>RaxelAK</em>

+ Done menambah CSRF di app.blade.php
+ Done membuat auth token di user dan new user registered
+ Done membuat tombol save PDF (admin only)

[up to 25/06/2021 21:40] [ Status : On Development ver 1.0.8b] <em>RaxelAK</em>

+ Done pembuatan datatable ke index report
+ Route ke pdf done, view pdf sedang on progress
+ installed dompdf (fungsionalitas on progress)
+ beberapa bugs di view index teratasi

[up to 23/06/2021 15:38] [ Status : On Development ver 1.0.8] <em>RaxelAK</em>

+ Deployed ke Heroku
+ Mendebug masalah view create report
+ Merapihkan code yang tidak terpakai
+ Menambah Model dan Controller (Report,Job)
+ Seeder DB dari User, Report, Job

[up to 16/06/2021 20:58] [ Status : On Development ver 1.0.6] <em>RaxelAK</em>

+ Menambah fitur create report
+ Memperbaiki tampilan login
+ Mendebug masalah pada create report / koneksi Model ke DB