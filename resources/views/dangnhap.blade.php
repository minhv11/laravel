@include('menu')
<div class="row">
          <div class="col-md-6">
            <form method="POST" action="">
              <h4>Đăng nhập</h4>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email">
              </div>
              <div class="mb-3">
                <label for="pass" class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" name="pass" id="pass">
              </div>
              
              <button type="submit" class="btn btn-primary">Đăng nhập</button>
            </form>
          </div>
          <div class="col-md-6"></div>
        </div>
        @include('footer')