@extends('layouts.backend')

@section('content')
    <div class="accordion" id="accordionImpressum">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true"
                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Dependencies
                </button>
            </h2>

            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionImpressum">
                <div class="accordion-body">
                    <p>Bootstrap :</p>

                    <ul>
                        <li><a target="_blank" href="https://getbootstrap.com/">Bootstrap</a> - 5.1.3</li>
                        <li><a target="_blank" href="http://bootboxjs.com/documentation.html">Bootbox</a> - 5.5.2</li>
                    </ul>
                    <br />

                    <p>jQuery :</p>

                    <ul>
                        <li><a target="_blank" href="http://jquery.com/">jQuery</a> - <span class="jQuery_version"></span>
                        </li>
                    </ul>

                    <ul>
                        <li><a target="_blank" href="https://select2.org/">Select2</a> - 4.0.13</li>
                        <li><a target="_blank" href="https://codeseven.github.io/toastr/">Toastr</a> - 2.1.4</li>
                    </ul>

                    <ul>
                        <li><a target="_blank" href="https://www.jstree.com/">jsTree</a> - 3.3.12</li>
                    </ul>

                    <ul>
                        <li><a target="_blank" href="https://datatables.net/download/packages">DataTables</a> - 1.11.3</li>
                        <li><a target="_blank" href="https://github.com/yajra/laravel-datatables">Yajra DataTables</a>-
                            9.18.1</li>
                    </ul>
                    <br />

                    <p>Javascript :</p>

                    <ul>
                        <li><a target="_blank" href="https://github.com/moment/moment/">moment.js</a> - 2.29.1</li>
                        <li><a target="_blank" href="http://underscorejs.org/">underscore.js</a> - 1.13.1</li>
                        <li><a target="_blank" href="https://www.chartjs.org/">chart.js</a> - 3.5.1</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-controls="collapseTwo">
                    Webserver
                </button>
            </h2>

            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionImpressum">
                <div class="accordion-body">
                    <p>This application is created using <a href="https://laragon.org/" target="_blank">LARAGON</a>
                        webserver in its latest version :</p>
                    <table>
                        <tr>
                            <td colspan="5" class="text-center">
                                <a target="_blank" href="https://github.com/leokhoa/laragon/releases">
                                    <img src="{{ asset('img/general/laragon.png') }}" alt="LARAGON" width="200px" />
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="5" class="text-center">5.0.0</td>
                        </tr>
                        <tr>
                            <td colspan="5"><br /><br /></td>
                        </tr>

                        <tr>
                            <td class="text-center">
                                <a target="_blank" href="http://httpd.apache.org/">
                                    <img src="{{ asset('img/general/xampp-apache-001.png') }}" alt="Apache" />
                                </a>
                            </td>
                            <td class="text-center">
                                <a target="_blank" href="http://php.net/">
                                    <img src="{{ asset('img/general/xampp-php-001.png') }}" alt="PHP" />
                                </a>
                            </td>
                            <td class="text-center">
                                <a target="_blank" href="https://dev.mysql.com/downloads/mysql/">
                                    <img src="{{ asset('img/general/xampp-mysql-001.png') }}" alt="MySQL" />
                                </a>
                            </td>
                            <td class="text-center">
                                <a target="_blank" href="http://www.phpmyadmin.net/">
                                    <img src="{{ asset('img/general/xampp-phpmyadmin-001.png') }}" alt="phpMyAdmin" />
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="5">&nbsp;</td>
                        </tr>

                        <tr>
                            <td class="text-center">
                                @php
                                    if (preg_match('/Apache\/(.*?) /', apache_get_version(), $match) == 1) {
                                        echo $match[1];
                                    }
                                @endphp
                            </td>
                            <td class="text-center">@php echo phpversion(); @endphp</td>
                            <td class="text-center">8.0.26</td>
                            <td class="text-center">5.1.1</td>
                        </tr>

                        <tr>
                            <td colspan="5">
                                <hr />
                            </td>
                        </tr>

                        <tr>
                            <td colspan="5" class="text-center">
                                <img src="{{ asset('img/general/datatables-serverside-processing.png') }}"
                                    alt="Datatables-SSP" />
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @parent
    <script type="text/javascript">
        /* -------------------------------------------------------------------------------------------- */
        $(".jQuery_version").html(jQuery.fn.jquery);
        /* -------------------------------------------------------------------------------------------- */
    </script>
@endsection
