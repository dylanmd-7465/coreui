</div>
      </div>
      <footer class="footer px-4">
        <div>
          <a href="https://coreui.io">CoreUI</a>
          <a href="https://coreui.io/product/free-bootstrap-admin-template/">Bootstrap Admin Template</a>
          &copy; 2026 creativeLabs.
        </div>
        <div class="ms-auto">
          Powered by&nbsp;
          <a href="https://coreui.io/bootstrap/docs/">CoreUI UI Components</a>
        </div>
      </footer>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="vendors/simplebar/js/simplebar.min.js"></script>
    <script>
      const header = document.querySelector("header.header");

      document.addEventListener("scroll", () => {
        if (header) {
          header.classList.toggle("shadow-sm", document.documentElement.scrollTop > 0);
        }
      });
    </script>
  </body>
</html>
