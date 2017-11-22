@extends('layouts.app')

@section('content')
    <div class="container">

        @php
            function  build_tree($temp,$parent_id = 0){
                if(is_array($temp) && count($temp[$parent_id])>0){
                    $tr = '<ul>';
                    foreach($temp[$parent_id] as $item){
                        $tr .= '<li>'.$item['full_name'] .' (<b>'.$item['position'].'</b>)' ;
                        $tr .=  build_tree($temp,$item['id']);
                        $tr .= '</li>';
                    }
                    $tr .= '</ul>';
                }
                else return null;
                return $tr;
            }

            echo @build_tree($tree);
        @endphp

    </div>
@endsection
