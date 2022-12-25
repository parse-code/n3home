@props([
    'product' => null,
])

<div class="card">
    <div class="card-header">
        {{$product->name}}
        <div class="float-end">
            <div class="dropdown">
                <button class="btn-plain" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-three-dots-vertical"></i>
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="{{route('spu.edit', $product->id)}}">编辑</a>
                    </li>
                    <li>
                        <a class="dropdown-item"
                           href="{{route('appointment.create', ['slug' => $product->company->slug, 'spu_id' => $product->id])}}">
                            发送
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item text-danger" href="#"> 删除</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card-body">
    </div>
</div>
