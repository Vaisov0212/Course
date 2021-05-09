<div class="col-sm-12">
    <p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
</div>
</div><!--/.row-->
</div>	<!--/.main-->

<script src="/admin/js/jquery-1.11.1.min.js"></script>
<script src="/admin/js/bootstrap.min.js"></script>
<script src="/admin/js/chart.min.js"></script>
<script src="/admin/js/chart-data.js"></script>
<script src="/admin/js/easypiechart.js"></script>
<script src="/admin/js/easypiechart-data.js"></script>
<script src="/admin/js/bootstrap-datepicker.js"></script>
<script src="/admin/js/custom.js"></script>

<script>
window.onload = function () {
var chart1 = document.getElementById("line-chart").getContext("2d");
window.myLine = new Chart(chart1).Line(lineChartData, {
responsive: true,
scaleLineColor: "rgba(0,0,0,.2)",
scaleGridLineColor: "rgba(0,0,0,.05)",
scaleFontColor: "#c5c7cc"
});
};
</script>

</body>
</html>
