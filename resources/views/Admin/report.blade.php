@include('../Admin/init/header')
<title>Document</title>
<body>

    <div class="d-flex justify-content-between">
        <H1 class="ms-2">Report Repair</H1>
        <form class="d-flex" role="search">
           <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
           <button class="btn btn-outline-success me-2" type="submit">Search</button>
       </form>
     </div>
    <table class="table table-dark table-bordered">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td colspan="2">Larry the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
    </table>
</body>
</html>
@include('../Admin/init/footer')
