<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Add New Service
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.services')}}" class="btn btn-success pull-right">All
                                    Services</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="storeService">
                            
                            <div class="form-group">
                                <label class="col-md-4 control-label">Nama Media</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="media_id">
                                        <option value="">Select media</option>
                                        @foreach ($medias as $media)
                                        <option value="{{$media->id}}">{{$media->nama_web}}</option>
                                        @endforeach
                                    </select>
                                    @error('media_id') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Kategori Web</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Kategori Web" class="form-control input-md" wire:model="kategori_web" />
                                    @error('kategori_web') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Keterangan</label>
                                <div class="col-md-4" wire:ignore>
                                    <textarea class="form-control" id="keterangan" placeholder="Keterangan"
                                        wire:model="keterangan"></textarea>
                                    @error('keterangan') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Harga</label>
                                <div class="col-md-4">
                                    <input type="number" placeholder="Harga" class="form-control input-md"
                                        wire:model="harga" />
                                    @error('harga') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Proses</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Proses" class="form-control input-md"
                                        wire:model="proses" />
                                    @error('proses') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Category</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="category_id">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>