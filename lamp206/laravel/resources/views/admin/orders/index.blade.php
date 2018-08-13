@extends('admin.layout.index')

@section('container')
<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i> 订单列表</span>
                    </div>
                    <div class="mws-panel-toolbar">
                        <div class="btn-toolbar">
                            <div class="btn-group">
                                <a href="#" class="btn"><i class="icol-accept"></i> 全选</a>
                                <a href="#" class="btn"><i class="icol-cross"></i> 全不选</a>
                             
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#"><i class="icol-disconnect"></i> Disconnect From Server</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-submenu">
                                        <a href="#">More Options</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Contact Administrator</a></li>
                                            <li><a href="#">Destroy Table</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <thead>
                                <tr>
                                	<th class="checkbox-column">
                                        <input type="checkbox">
                                    </th>
                                    <th>订单号</th>
                                    <th>姓名</th>
                                    <th>地址</th>
                                    <th>电话</th>
                                    <th>状态</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                	<td class="checkbox-column">
                                        <input type="checkbox">
                                    </td>
                                    <td></td>
                                    <td>Internet Explorer 4.0</td>
                                    <td>Win zzzzzzzzzzzzzzzz95+</td>
                                    <td>4</td>
                                    <td>X</td>
                                </tr>
                                <tr>
                                	<td class="checkbox-column">
                                        <input type="checkbox">
                                    </td>
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.0</td>
                                    <td>Win 95+</td>
                                    <td>5zzzzzzzzzzzz</td>
                                    <td>C</td>
                                </tr>
                                <tr>
                                	<td class="checkbox-column">
                                        <input type="checkbox">
                                    </td>
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.5</td>
                                    <td>Win 95+</td>
                                    <td>5.5</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                	<td class="checkbox-column">
                                        <input type="checkbox">
                                    </td>
                                    <td>Trident</td>
                                    <td>Internet Explorer 6</td>
                                    <td>Win 98+</td>
                                    <td>6</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                	<td class="checkbox-column">
                                        <input type="checkbox">
                                    </td>
                                    <td>Trident</td>
                                    <td>Internet Explorer 7</td>
                                    <td>Win XP SP2+</td>
                                    <td>7</td>
                                    <td>A</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>    	
                </div>



@endsection