
<?php

    function _substr($str, $length, $minword = 3)
    {
    $sub = '';
    $len = 0;
    foreach (explode(' ', $str) as $word)
    {
        $part = (($sub != '') ? ' ' : '') . $word;
        $sub .= $part;
        $len += strlen($part);
        if (strlen($word) > $minword && strlen($sub) >= $length)
        {
          break;
        }
     }
        return $sub . (($len < strlen($str)) ? '...' : '');
    }
        
?>


<?php  
    if(Schema::hasTable('categories')){
        $category =    DB::table('categories')->select('namecategory', 'id')->get();  
        $new_category = [];
        if(count($category)>0){
            foreach ($category as  $value) {
               $new_category[$value->id] = $value->namecategory;
            }
        }
    }    
    
?>

<div class="table-responsive">
    <table class="table" id="posts-table">
        <thead>
        <tr>
            <th>Image</th>
        <th>Title</th>
        <th>Category</th>
        <th>Content</th>
        <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
            
        @foreach($posts as $post)
            <tr>
                <td><img src="{{ url($post->image) }}" style="width:200px"></td>
            <td>{{ $post->title }}</td>
            <td>{{ @$new_category[$post->category] }}</td>

            <td>{!! _substr($post->content,240,3) !!}</td>
                <td width="120">
                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('posts.show', [$post->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('posts.edit', [$post->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
