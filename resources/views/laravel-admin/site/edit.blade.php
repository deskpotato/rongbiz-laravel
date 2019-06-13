<form action="{{ route('site.update',$site->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
            <div class="form-group">
              <label for="exampleInputEmail1">站点名称</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter sitename" value="{{ $site->name }}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">网页SEO关键词</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="keyword" placeholder="keyword" value="{{ $site->keyword }}">
            </div>
           
            <div class="form-group">
                <label for="exampleInputPassword2">网页SEO描述</label>
                <input type="text" class="form-control" id="exampleInputPassword2" name="description" placeholder="description" value="{{ $site->description }}">
              </div>
      
            <div class="form-group">
                <label for="exampleInputPassword3">Copyright</label>
                <input type="text" class="form-control" id="exampleInputPassword3" name="copyright" placeholder="Copyright" value="{{ $site->copyright }}">
              </div>
      
            <div class="form-group">
                  <label for="exampleInputPassword4">Phone</label>
                  <input type="text" class="form-control" id="exampleInputPassword4" name="phone" placeholder="phone" value="{{ $site->phone }}">
            </div>
            <div class="form-group">
                    <label for="exampleInputPassword5">公司地址</label>
                    <input type="text" class="form-control" id="exampleInputPassword5" name="address" placeholder="address" value="{{ $site->address }}">
            </div>
            <button type="submit" class="btn btn-primary">更新</button>
        </form>