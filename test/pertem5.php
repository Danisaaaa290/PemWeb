<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header> 
        <h1>Selamat Datang di Web Praktikum CSS</h1> 
    </header> 
 
    <main> 
        <section> 
            <h2>Tentang CSS</h2> 
            <p>CSS adalah bahasa untuk mendesain tampilan web.</p> 
        </section> 
 
        <section> 
            <h2>Keuntungan Menggunakan CSS</h2> 
            <ul> 
                <li>Mudahkan pengelolaan desain halaman web.</li> 
                <li>Memisahkan struktur dan desain.</li> 
            </ul> 
        </section> 
    </main> 
 
    <footer> 
        <p>&copy; 2026 Web Praktikum CSS</p> 
    </footer> 
</body> 
</html>
    <style>
    * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }
        header { 
            background-color: #4CAF50; 
            text-align: center; 
            padding: 20px;
}
        h1 {
            color: white;
            font-family: Arial,sans-serif;
        }
          padding: 20px; 
} 
 
        h2 { 
  color: #333; 
  font-size: 20px; 
} 
 
        p, ul { 
  font-family: Arial, sans-serif; 
  font-size: 16px; 
} 
 
/* Styling untuk footer */ 
        footer { 
            background-color: #333; 
            color: white; 
            text-align: center; 
            padding: 10px; 
            position: fixed; 
            bottom: 0; 
            width: 100%; 
        } 
</style>
<style> 
        div { 
            width: 300px; 
            height: 150px; 
            margin: 20px; 
            padding: 15px; 
            border: 5px solid black; 
} 
</style>
<style> 
/* Contoh Absolute Positioning */ 
    #box1 { 
            position: absolute; 
            top: 50px; 
            left: 50px; 
            width: 100px; 
            height: 100px; 
            background-color: red; 
} 
 
/* Contoh Relative Positioning */ 
    #box2 { 
            position: relative; 
            top: 20px; 
            left: 20px; 
            width: 100px; 
            height: 100px; 
            background-color: blue; 
} 
</style> 
            .container { 
            display: flex; 
            justify-content: space-between; 
            } 
 
.item { 
            width: 45%; 
            background-color: lightgray; 
            padding: 20px; 
            margin: 10px; 
} 
</style> 
        <div class="container"> 
             <div class="item">Kolom 1</div> 
            <div class="item">Kolom 2</div> 
</div> 
<style> 
/* Reset dasar untuk konsistensi */ 
* { 
margin: 0; 
padding: 0; 
box-sizing: border-box; 
} 
</style>
<style> 
/* Body: Background dan font dasar */ 
body { 
font-family: Arial, sans-serif; 
line-height: 1.6; 
color: #333; 
background-color: #f4f4f4; 
margin-bottom: 50px; 
margin-top: 70px; 
} 
</style>
<style> 
/* Content: Layout utama */ 
#content { 
max-width: 1200px; 
margin: 0 auto; 
/* Center content */ 
padding: 20px; 
background-color: white; 
border-radius: 8px; 
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
} 
</style> 
<style> 
/* Footer: Styling sederhana */ 
#footer { 
        text-align: center; 
        padding: 10px; 
        background-color: #333; 
        color: white; 
        margin-top: 20px; 
        position: fixed; 
        bottom: 0; 
        width: 100%; 
} 
</style> 
<style> 
/* Responsive: Untuk layar kecil */ 
@media (max-width: 600px) { 
#content { 
padding: 10px; 
} 
} 
</style> 
</body>
</html>