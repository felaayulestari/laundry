        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.0.5
      </div>
      <strong><a href="http://adminlte.io">Sistem Informasi Laundry</a></strong> 
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  
  <!-- Bootstrap 4 -->
  <script src="https://objectstorage.ap-melbourne-1.oraclecloud.com/n/axoqk3ohodut/b/uts-fela/o/jsAdmin%2Fbootstrap.bundle.min.js"></script>
  <!-- bs-custom-file-input -->
  <script src="https://objectstorage.ap-melbourne-1.oraclecloud.com/n/axoqk3ohodut/b/uts-fela/o/jsAdmin%2Fbs-custom-file-input.min.js"></script>
  <script src="https://objectstorage.ap-melbourne-1.oraclecloud.com/n/axoqk3ohodut/b/uts-fela/o/jsAdmin%2Fsweetalert.min.js"></script>
  <!-- AdminLTE App -->
  <script src="https://objectstorage.ap-melbourne-1.oraclecloud.com/n/axoqk3ohodut/b/uts-fela/o/jsAdmin%2Fadminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="https://objectstorage.ap-melbourne-1.oraclecloud.com/n/axoqk3ohodut/b/uts-fela/o/jsAdmin%2Fdemo.js"></script>
  <script src="https://objectstorage.ap-melbourne-1.oraclecloud.com/n/axoqk3ohodut/b/uts-fela/o/jsAdmin%2Fselect2.full.min.js"></script>
  <script src="https://objectstorage.ap-melbourne-1.oraclecloud.com/n/axoqk3ohodut/b/uts-fela/o/jsAdmin%2Fjquery.dataTables.min.js"></script>
  <script src="https://objectstorage.ap-melbourne-1.oraclecloud.com/n/axoqk3ohodut/b/uts-fela/o/jsAdmin%2Fjquery.bootstrap-duallistbox.min.js"></script>
  <script src="https://objectstorage.ap-melbourne-1.oraclecloud.com/n/axoqk3ohodut/b/uts-fela/o/jsAdmin%2Fmoment.min.js"></script>
  <script src="https://objectstorage.ap-melbourne-1.oraclecloud.com/n/axoqk3ohodut/b/uts-fela/o/jsAdmin%2FdataTables.bootstrap4.min.js"></script>
  <script src="https://objectstorage.ap-melbourne-1.oraclecloud.com/n/axoqk3ohodut/b/uts-fela/o/jsAdmin%2FdataTables.responsive.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
  <script src="https://objectstorage.ap-melbourne-1.oraclecloud.com/n/axoqk3ohodut/b/uts-fela/o/jsAdmin%2Fdaterangepicker.js"></script>
  <script type="text/javascript" src="https://objectstorage.ap-melbourne-1.oraclecloud.com/n/axoqk3ohodut/b/uts-fela/o/jsAdmin%2Fjquery.PrintArea.js"></script>
  <script type="text/javascript" src="https://objectstorage.ap-melbourne-1.oraclecloud.com/n/axoqk3ohodut/b/uts-fela/o/jsAdmin%2Fprint.min.js"></script>
  <script type="text/javascript">
  
    $(document).ready(function () {
      bsCustomFileInput.init();
    });

    $(function () {
      $(document).ready(function () {
          var data = $('.data-flush').data('flash');
          console.log(data);
          if (data) {
              var a = data.split(',');
              if (a[1].replace(/\s/g, '') == 'success') {
                  swal("Information!", a[0], "success");
              } else {
                  swal("Information!", a[0], "error");
              }
          }
      })
    })
    $('.select2').select2({
      placeholder: "Pilih item"
    });

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    });
    $('#reservation').daterangepicker({
      locale: {
            format: 'YYYY/MM/DD'
        }
    })
    $("#cetak").bind("click", function(event) {
      const tgl = $("#reservation").val();
      const Url = $(this).data('url');
      var a = tgl.split(' - ');
      dataa = {
        'tglawal': a[0],
        'tglakhir': a[1]
      };
      var datatanggal = "Dari Tanggal " + convertanggal(a[0]) + " s/d " + convertanggal(a[1]);
      // var options = { mode : "popup", popClose : true, extraHead : '<meta charset="utf-8"/>,<meta http-equiv="X-UA-Compatible" content="IE=edge"/>,<style rel="stylesheet" type="text/css" media="print">@page { size: landscape; }</style>' };
      $("#tgllaporan").text(datatanggal);
      $('.action').css('display', 'none');
      $('.dataTables_filter').css('display', 'none');
      $('.dataTables_info').css('display', 'none');
      $('.dataTables_paginate').css('display', 'none');
      $('.dataTables_length').css('display', 'none');
      // cetak data pada area <div id="#data-mahasiswa"></div>
      $('#data-print').printArea();
      $('.action').css('display', 'block');
      $('.dataTables_filter').css('display', 'block');
      $('.dataTables_info').css('display', 'block');
      $('.dataTables_paginate').css('display', 'block');
      $('.dataTables_length').css('display', 'block');
    });
    function convertanggal(item){
      item = new Date(item)
      var hari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
      var bulan = ['Januari', 'Februari', 'Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
      var tanggal = item.getDate();
      var xhari = item.getDay();
      var xbulan = item.getMonth();
      var xtahun = item.getYear();
      var hari = hari[xhari];
      var bulan = bulan[xbulan];
      var tahun = (xtahun < 1000)?xtahun + 1900 : xtahun;
      return (tanggal + ' ' + bulan + ' ' + tahun);
    }
  </script>
</body>

</html>