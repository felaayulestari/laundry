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
  <script src="https://objectstorage.ap-melbourne-1.oraclecloud.com/n/axoqk3ohodut/b/uts-fela/o/jsMember%2Fbootstrap.bundle.min.js"></script>
  <!-- bs-custom-file-input -->
  <script src="https://objectstorage.ap-melbourne-1.oraclecloud.com/n/axoqk3ohodut/b/uts-fela/o/jsMember%2Fbs-custom-file-input.min.js"></script>
  <script src="https://objectstorage.ap-melbourne-1.oraclecloud.com/n/axoqk3ohodut/b/uts-fela/o/jsMember%2Fsweetalert.min.js"></script>
  <!-- AdminLTE App -->
  <script src="https://objectstorage.ap-melbourne-1.oraclecloud.com/n/axoqk3ohodut/b/uts-fela/o/jsMember%2Fadminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="https://objectstorage.ap-melbourne-1.oraclecloud.com/n/axoqk3ohodut/b/uts-fela/o/jsMember%2Fdemo.js"></script>
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
  </script>
</body>

</html>