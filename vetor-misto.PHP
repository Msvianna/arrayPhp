<HTML>
  <head>
    <?php
    $lucro = [
      "jan" => 25000 , "Fevereiro" =>60000 , "Março" => 45000, "Abril" => 80000 , "Maio"  => 65000, "Junho" => 50000]
      ?>
    <script src="https://www.gstatic.com/charts/loader.js" > //biblioteca
    </script>
    <script>
      google.charts.load('current', {'packages': ['corechart']});
      google.charts.setOnLoadCallback(drawChart); //função de desenho
      function drawChart(){ 
        var data = new google.visualization.DataTable(); //tipo de dados do goole para representar linhas e colunas
        data.addColumn('string', 'Mês'); //cria colunas
        data.addColumn('number', 'Lucro');
        data.addRows([ //adiciona linhas
          <?php
          foreach($lucro as $mes => $valor) //(array as novaVariavel => NovaVariavel)
          echo ("['$mes',$valor],");
          ?>
        ]);
        var options = {'title' : 'Qual o lucro do mês?',
          'width': 600,
          'height' : 450};
        var chart = new google.visualization.PieChart(
          document.getElementById('chart_div'));
          chart.draw(data,options);
      }

    </script>
  </head>
  <body>
    <div id="chart_div"></div>
  </body>
</HTML>