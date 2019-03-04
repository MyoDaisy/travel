@extends('index.master')
@section('content')

    <div class="main">
        <!--=======content================================-->

        <div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - August 05, 2013!</div>
            <div class="container_12">
                <div class="grid_8">
                    <div class="map">
                        <div id="map"></div>
                        {{--<address>--}}
                            {{--<dl>--}}
                                {{--<dt>--}}
                                    {{--8901 Marmora Road,<br>--}}
                                    {{--Glasgow, D04 89GR.--}}
                                {{--</dt>--}}
                                {{--<dd><span>Freephone:</span>+1 800 559 6580</dd>--}}
                                {{--<dd><span>Telephone:</span>+1 800 603 6035</dd>--}}
                                {{--<dd><span>FAX:</span>+1 800 889 9898</dd>--}}
                                {{--<dd>E-mail: <a href="#" class="link-1">mail@demolink.org</a></dd>--}}
                            {{--</dl>--}}
                        {{--</address>--}}
                        {{--<address class="mb0">--}}
                            {{--<dl>--}}
                                {{--<dt>--}}
                                    {{--9870 St Vincent Place,<br>--}}
                                    {{--Glasgow, DC 45 Fr 45.--}}
                                {{--</dt>--}}
                                {{--<dd><span>Freephone:</span>+1 800 559 6580</dd>--}}
                                {{--<dd><span>Telephone:</span>+1 800 603 6035</dd>--}}
                                {{--<dd><span>FAX:</span>+1 800 889 9898</dd>--}}
                                {{--<dd>E-mail: <a href="#" class="link-1">mail@demolink.org</a></dd>--}}
                            {{--</dl>--}}
                        {{--</address>--}}
                    </div>
                </div>
                <div class="grid_4">
                    <div id="tabs" class="recommendation-form">
                        <ul>
                            <li><a href="#tabs-1">Recommendation</a></li>
                            <li><a href="#tabs-2">Search</a></li>
                        </ul>
                        <div class="clear"></div>
                        <div class="tab_cont" id="tabs-1">
                            <h4>Recommended Friend</h4>
                            <form method="post" id="form1" class="form1">
                                <a onClick="document.getElementById('form1').submit()" href="#" class="btn">Contact them</a>
                            </form>
                            <h4>Recommended Location</h4>
                            <form method="post" id="form2" class="form1">
                                <div class="clear"></div>
                            </form>
                        </div>
                        <div class="tab_cont" id="tabs-2">
                            <form method="post" id="form-search" class="form1">
                                <label >
                                    <span>Location</span>
                                    <select name="select">
                                        <option value="">Any location</option>
                                        <option value="">...</option>
                                    </select>
                                </label>
                                <label >
                                    <span>Active</span>
                                    <select name="select">
                                        <option value="">Any active</option>
                                        <option value="">...</option>
                                    </select>
                                </label>
                                <div class="clear"></div>
                                <a onClick="document.getElementById('form-search').submit()" href="#" class="btn"> Search</a>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>

@endsection

