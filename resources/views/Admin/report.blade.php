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
              <th scope="col">ลำดับ</th>
              <th scope="col">ชื่อ</th>
              <th scope="col">อีเมล</th>
              <th scope="col">วันที่เป็นสมาชิก</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            @php($counter = ($dataUser->currentPage() - 1) * $dataUser->perPage())
            @foreach ($dataUser as $value)
            <tr>
              <th scope="row">{{ ++$counter }}</th>
              <td>{{$value->name}}</td>
              <td>{{$value->email}}</td>
              <td>{{$value->created_at}}</td>
            </tr>
            @endforeach
          </tbody>
    </table>
    {{ $dataUser->links() }}
</body>
</html>
@include('../Admin/init/footer')
