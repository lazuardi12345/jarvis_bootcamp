@extends('main')
@section('conten')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Users</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <h1>Halaman Edit User</h1>
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">tanggal</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
           @foreach ($users as $user)
           <tr>
            <td>
              <div class="d-flex px-2 py-1">
                <div>
                  <img src="/assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                </div>
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="mb-0 text-sm">{{ $user->name}}</h6>
                  <p class="text-xs text-secondary mb-0">{{ $user->email}}</p>
                </div>
              </div>
            </td>
            <td class="align-middle text-center">
              <span class="text-secondary text-xs font-weight-bold">{{ Carbon\Carbon::parse($user->created_at)->format('d F Y') }}</span>
            </td>
            <td class="align-middle">
              <a href="/users/{{ $user->id/edit}};" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                Edit
              </a>
            </td>
          </tr>
          <tr>
            <td>
              <div class="d-flex px-2 py-1">
                <div>
                  <img src="/assets/img/team-3.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user2">
                </div>
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="mb-0 text-sm">Alexa Liras</h6>
                  <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                </div>
              </div>
            </td>
            <td>
              <p class="text-xs font-weight-bold mb-0">Programator</p>
              <p class="text-xs text-secondary mb-0">Developer</p>
            </td>
            <td class="align-middle text-center text-sm">
              <span class="badge badge-sm bg-gradient-secondary">Offline</span>
            </td>
            <td class="align-middle text-center">
              <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
            </td>
            <td class="align-middle">
              <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                Edit
              </a>
            </td>
          </tr>
          <tr>
            <td>
              <div class="d-flex px-2 py-1">
                <div>
                  <img src="/assets/img/team-4.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user3">
                </div>
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="mb-0 text-sm">Laurent Perrier</h6>
                  <p class="text-xs text-secondary mb-0">laurent@creative-tim.com</p>
                </div>
              </div>
            </td>
            <td>
              <p class="text-xs font-weight-bold mb-0">Executive</p>
              <p class="text-xs text-secondary mb-0">Projects</p>
            </td>
            <td class="align-middle text-center text-sm">
              <span class="badge badge-sm bg-gradient-success">Online</span>
            </td>
            <td class="align-middle text-center">
              <span class="text-secondary text-xs font-weight-bold">19/09/17</span>
            </td>
            <td class="align-middle">
              <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                Edit
              </a>
            </td>
          </tr>
          <tr>
            <td>
              <div class="d-flex px-2 py-1">
                <div>
                  <img src="/assets/img/team-3.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user4">
                </div>
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="mb-0 text-sm">Michael Levi</h6>
                  <p class="text-xs text-secondary mb-0">michael@creative-tim.com</p>
                </div>
              </div>
            </td>
            <td>
              <p class="text-xs font-weight-bold mb-0">Programator</p>
              <p class="text-xs text-secondary mb-0">Developer</p>
            </td>
            <td class="align-middle text-center text-sm">
              <span class="badge badge-sm bg-gradient-success">Online</span>
            </td>
            <td class="align-middle text-center">
              <span class="text-secondary text-xs font-weight-bold">24/12/08</span>
            </td>
            <td class="align-middle">
              <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                Edit
              </a>
            </td>
          </tr>
          <tr>
            <td>
              <div class="d-flex px-2 py-1">
                <div>
                  <img src="/assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user5">
                </div>
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="mb-0 text-sm">Richard Gran</h6>
                  <p class="text-xs text-secondary mb-0">richard@creative-tim.com</p>
                </div>
              </div>
            </td>
            <td>
              <p class="text-xs font-weight-bold mb-0">Manager</p>
              <p class="text-xs text-secondary mb-0">Executive</p>
            </td>
            <td class="align-middle text-center text-sm">
              <span class="badge badge-sm bg-gradient-secondary">Offline</span>
            </td>
            <td class="align-middle text-center">
              <span class="text-secondary text-xs font-weight-bold">04/10/21</span>
            </td>
            <td class="align-middle">
              <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                Edit
              </a>
            </td>
          </tr>
          <tr>
            <td>
              <div class="d-flex px-2 py-1">
                <div>
                  <img src="/assets/img/team-4.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user6">
                </div>
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="mb-0 text-sm">Miriam Eric</h6>
                  <p class="text-xs text-secondary mb-0">miriam@creative-tim.com</p>
                </div>
              </div>
            </td>
            <td>
              <p class="text-xs font-weight-bold mb-0">Programator</p>
              <p class="text-xs text-secondary mb-0">Developer</p>
            </td>
            <td class="align-middle text-center text-sm">
              <span class="badge badge-sm bg-gradient-secondary">Offline</span>
            </td>
            <td class="align-middle text-center">
              <span class="text-secondary text-xs font-weight-bold">14/09/20</span>
            </td>
            <td class="align-middle">
              <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                Edit
              </a>
            </td>
          </tr>
           <div class="col-12">
            <form>
              <fieldset disabled>
                <legend>Disabled fieldset example</legend>
                <div class="mb-3">
                  <label for="disabledTextInput" class="form-label">Disabled input</label>
                  <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                </div>
                <div class="mb-3">
                  <label for="disabledSelect" class="form-label">Disabled select menu</label>
                  <select id="disabledSelect" class="form-select">
                    <option>Disabled select</option>
                  </select>
                </div>
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                    <label class="form-check-label" for="disabledFieldsetCheck">
                      Can't check this
                    </label>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </fieldset>
            </form>
           </div>
    <footer class="footer py-4  ">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start">
              © <script>
                document.write(new Date().getFullYear())
              </script>,
              made with <i class="fa fa-heart"></i> by
              <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
              for a better web.
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>
@endsection