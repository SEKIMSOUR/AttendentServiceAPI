<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function Getschedule(Request $request) {
        return array (
            'status' => true,
            'message' => 'test',
            'schedule' => [
                array (
                    'date' => '2017-10-9',
                    'daily_schedule' => [
                        array (
                        "status" => 1,
                        "time_start" => '9:0',
                        "time_end" => '11:0',
                        "subject_name" => 'ENG',
                        "room" => 'E-302',
                        "session_id" => '0001'
                        ),
                        array (
                            "status" => 1,
                            "time_start" => '1:0',
                            "time_end" => '3:0',
                            "subject_name" => 'FR',
                            "room" => 'A-302',
                            "session_id" => '0002'
                        )
                    ]
                ),
                array (
                    'date' => '2017-10-10',
                    'daily_schedule' => [
                        array (
                            "status" => 0,
                            "time_start" => '9:0',
                            "time_end" => '11:0',
                            "subject_name" => 'NL',
                            "room" => 'E-302',
                            "session_id" => '0003'
                        ),
                        array (
                            "status" => 0,
                            "time_start" => '1:0',
                            "time_end" => '3:0',
                            "subject_name" => 'NL',
                            "room" => 'A-302',
                            "session_id" => '0005'
                        )
                    ]
                ),
                array (
                    'date' => '2017-10-11',
                    'daily_schedule' => [
                        array (
                            "status" => 0,
                            "time_start" => '7:0',
                            "time_end" => '9:0',
                            "subject_name" => 'M&S',
                            "room" => 'F-404',
                            "session_id" => '0003'
                        ),
                        array (
                            "status" => 0,
                            "time_start" => '3:0',
                            "time_end" => '5:0',
                            "subject_name" => 'N S',
                            "room" => 'A-302',
                            "session_id" => '0005'
                        )
                    ]
                ),
                array (
                    'date' => '2017-10-12',
                    'daily_schedule' => [
                        array (
                            "status" => 0,
                            "time_start" => '7:0',
                            "time_end" => '11:0',
                            "subject_name" => 'NL',
                            "room" => 'E-302',
                            "session_id" => '0003'
                        ),
                        array (
                            "status" => 0,
                            "time_start" => '1:0',
                            "time_end" => '3:0',
                            "subject_name" => 'NL',
                            "room" => 'A-302',
                            "session_id" => '0005'
                        )
                    ]
                ),
                array (
                    'date' => '2017-10-13',
                    'daily_schedule' => [
                        array (
                            "status" => 0,
                            "time_start" => '7:0',
                            "time_end" => '11:0',
                            "subject_name" => 'NL',
                            "room" => 'E-302',
                            "session_id" => '0003'
                        ),
                        array (
                            "status" => 0,
                            "time_start" => '1:0',
                            "time_end" => '3:0',
                            "subject_name" => 'NL',
                            "room" => 'A-302',
                            "session_id" => '0005'
                        )
                    ]
                ),
                array (
                    'date' => '2017-10-14',
                    'daily_schedule' => [ ]
                )
            ],
        );
    }


public function GetUserInfo(Request $request) {
        return array (
            "status" => true,
            "first_name" => 'siyen',
            "last_name" => 'heng',
            "student_id" => 'e20140987432509',
            "sex" => 'M',
            "photo" => 'http://ilarge.lisimg.com/image/5640895/970full-sean-thomson.jpg'

        );
    }

    public function RequestCheckin(Request $request) {
        return array (
            'status' => true,
            'message' => 'test',
        );
    }

    public function GetStudentList(Request $request) {
        return array (
            'status' => true,
            'message' => 'test',
            'group_list' => [
                array (
                    'group_name' => 'Vainglory',
                    'group_id' => 1,
                    'student_list' => [
                        array (
                            "status" => 1,
                            "first_name" => 'SE',
                            "last_name" => 'Kimsour',
                            "student_id" => 'e201049694',
                            "sex" => 'G',
                            "photo" => 'http://whysquare.co.nz/wp-content/uploads/2013/07/profile_square3-270x270.jpg'
                        ),
                        array (
                            "status" => 1,
                            "first_name" => 'SIYEN',
                            "last_name" => 'heng',
                            "student_id" => 'e201049695',
                            "sex" => 'M',
                            "photo" => 'https://scontent.fpnh2-2.fna.fbcdn.net/v/t31.0-8/18278684_1452989761461801_6238959509636786474_o.jpg?_nc_eui2=v1%3AAeF5lz7VqdCJeyR-zYutjfr1mIKe-NVFpu2TGqVxZfq0vcCkJtdui4lyGANjZyFhREkKyO94TxoAvcFjWmDNcfKRRWKp5YObI_8DUt5f76QvrQ&oh=ea8e6cf56f62335cf16a17cd1ae8dcd0&oe=5AA3CC95'
                        ),
                        array (
                            "status" => 1,
                            "first_name" => 'TANG',
                            "last_name" => 'Sokkang',
                            "student_id" => 'e201049696',
                            "sex" => 'M',
                            "photo" => 'https://scontent.fpnh2-2.fna.fbcdn.net/v/t31.0-8/17635483_1418698371557607_1443879173195253567_o.jpg?_nc_eui2=v1%3AAeEr__M-S5eIbx7WjSDrXHyKUWxEti8BAv3lyLgGN8FSAlDsgAun5KzPWX8DV2ElgOAtf_GWTdTHNemcla0EWBWySSmjUB80lTgdsnYrqbH6ng&oh=daab509be03eeee73f8a56ad433f4096&oe=5AA436AD'
                        ),
                        array (
                            "status" => 1,
                            "first_name" => 'THROUN',
                            "last_name" => 'Kosal',
                            "student_id" => 'e201049697',
                            "sex" => 'M',
                            "photo" => 'https://scontent.fpnh2-2.fna.fbcdn.net/v/t31.0-8/17390688_1756510044661994_319457620642731584_o.jpg?_nc_eui2=v1%3AAeETaY3SpdQe9jeLIVI55itp9m6Wq84wK-LDq_Gy1hsI0dMsP-KxZ9C-N1L6xt4CmxJpXEUhz7zvxXDASFjUU8SWK4Hd0qIVIljBjJ3NJtoibQ&oh=7bea67699dbe9ea399f5e22686946564&oe=5A6873E8'
                        ),
                        array (
                            "status" => 2,
                            "first_name" => 'SEOUN',
                            "last_name" => 'Socheat',
                            "student_id" => 'e201049698',
                            "sex" => 'M',
                            "photo" => 'https://scontent.fpnh2-2.fna.fbcdn.net/v/t1.0-9/18423958_1944826489117659_1197329677767131532_n.jpg?_nc_eui2=v1%3AAeHxXqcvkAkb_iJQrWZzaGvWbaN4YPbQaoUI8bmyQ8zfAn_UxlC5fLPLl3r-F8ycsi1MOUaIv_Qk8xu8Bl87rHEMTjQxV31bAAb-ZMvHNRIEMg&oh=116b09ed932a3e59f3f55fd6ef879ab6&oe=5AA8A29C'
                        ),
                        array (
                            "status" => 3,
                            "first_name" => 'SUN',
                            "last_name" => 'Sophearoth',
                            "student_id" => 'e201049699',
                            "sex" => 'M',
                            "photo" => 'https://scontent.fpnh2-2.fna.fbcdn.net/v/t31.0-8/20157200_1378953812160286_5055333347016024205_o.jpg?_nc_eui2=v1%3AAeHZqTwU__9nyCuEjxaDtMuqZkT8fxXlt3jglNCeaocesh6wksz04LReCY-1Mdh52TQvwWBzBYJ-VESw9CTFAf_2iVFx7UxXR5LKk6OSSITStg&oh=6d526c0417ff4446df8f9b5089113471&oe=5AA1B7BE'
                        )
                    ]
                )
            ],
        );
    }
}
