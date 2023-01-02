<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table id="examp">
                    <table class="table table-center mb-0 datatable">

                        <tr class="text-center" style="margin-left: 200px">
                            <td>
                                <img src="images/logo-full.png" style="width: 105px" class="me-3 flex-shrink-0" alt="...">
                            </td>
                            <td>
                                <table class="table table-bordered" style="float:right; margin-top:0">
                                    <tr class="text-center">
                                        <td>COVENANT'S TREASURES INTERNATIONAL SCHOOLS</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>Zone 2, Line 3, Olose Estate Along Kuola, Ibadan</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>Tel: 08069413092, 08138640677
                                        </td>
                                    </tr>
                                </table></td>
                        </tr>
                    </table>
                    <br> <br>
                    <table class="table table-bordered">
                        <tr>
                            <td><strong>Name:</strong> </td>
                            <td>{{ $name}}</td>
                            <td><strong>Gender: </strong></td>
                            <td>{{ $gender }}  </td>
                            <td><strong>Date of Birth: </strong></td>
                            <td>{{$date_of_birth}}</td>
                        </tr>
                        <tr>
                            <td><strong>Class</strong> </td>
                            <td>{{ $class }}</td>
                            <td><strong>Admission NO: </strong></td>
                            <td>{{ $admission_no }}</td>
                            <td><strong>Session/Term: </strong></td>
                            <td>1st Term 2022/2023</td>
                        </tr>
                    </table>

                    <br>
                    <table id="example1" class="table table-bordered table-striped table-responsive">
                        <thead>
                        <tr>
                            <th width="auto">SUBJECT</th>
                            <th width="auto">ASSIGNMENT</th>
                            <th width="auto">TEST</th>
                            <th width="auto">EXAM</th>
                            <th width="auto">TOTAL</th>
                            <th width="auto">Grade</th>
                            <th width="auto">REMARK</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($results as $result)

                            <tr>
                                <td>{{$result->subject}}</td>
                                <td>
                                    {{$result->assignment}}
                                </td>
                                <td>
                                    {{$result->test}}
                                </td>
                                <td>
                                    {{$result->exam}}
                                </td>
                                <td>
                                    {{$result->total}}
                                </td>

                                <td>
                                    @if($result->total > 92)
                                        Distinction (A+)
                                    @elseif(($result->total < 92) && ($result->total > 84))
                                        Excellent (A)
                                    @elseif(($result->total < 85) && ($result->total > 80))
                                        Very Good (B+)
                                    @elseif(($result->total < 81) && ($result->total > 74))
                                        Good (B)
                                    @elseif(($result->total < 75) && ($result->total > 69))
                                        Credit (C+)
                                    @elseif(($result->total < 70) && ($result->total > 59))
                                        Fairly Good (C)
                                    @elseif(($result->total < 60) && ($result->total > 49))
                                        Pass (C)
                                    @elseif(($result->total < 50) && ($result->total > 0))
                                        Fail (C)
                                    @endif
                                </td>
                                <td>
                                    {{$result->remark}}
                                </td>
                            </tr>
                        @endforeach
                        {{-- <tr>
                            <td colspan="7" align="right">Attendance</td>
                            <td>79</td>
                        </tr> --}}
                        {{--<tr>
                            <td colspan="9" align="right">Total</td>
                            <td>--}}{{--{{ $result->mks_obtained }}--}}{{--</td>
                        </tr>
                        <tr>
                            <td colspan="9" align="right">Average</td>
                            <td>--}}{{--{{ $average }}--}}{{--</td>
                        </tr>
                        <tr>
                            <td colspan="9" align="right">Grade</td>
                            <td>--}}{{--{{ $grade }}--}}{{--</td>
                        </tr>--}}
                        </tbody>
                        <div>
                            Teacher: <br>
                            <img src="images/{{$class_teacher_img}}" alt="" style="width: 100px">
                        </div>

                         <tfoot>
                            <tr>
                                <td colspan="2" align="center">Teacher's Comment
                                </td>
                                <td colspan="6" align="center">{{ $result->remark }}</td>
                            </tr>
                        </tfoot>
                    </table>

                </table>
                </table>
            </div>
        </div>
    </div>
</div>
