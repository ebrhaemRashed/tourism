<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li class="menu-title">YOUR COMPANY</li>
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <div class="menu-icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.5 7.49999L10 1.66666L17.5 7.49999V16.6667C17.5 17.1087 17.3244 17.5326 17.0118 17.8452C16.6993 18.1577 16.2754 18.3333 15.8333 18.3333H4.16667C3.72464 18.3333 3.30072 18.1577 2.98816 17.8452C2.67559 17.5326 2.5 17.1087 2.5 16.6667V7.49999Z"
                                stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M7.5 18.3333V10H12.5V18.3333" stroke="#888888" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin./') }}">Dashboard Light</a></li>
                </ul>
            </li>


            {{-- start hr --}}
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <div class="menu-icon">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.8381 12.7317C16.4566 12.7317 16.9757 13.2422 16.8811 13.853C16.3263 17.4463 13.2502 20.1143 9.54009 20.1143C5.43536 20.1143 2.10834 16.7873 2.10834 12.6835C2.10834 9.30245 4.67693 6.15297 7.56878 5.44087C8.19018 5.28745 8.82702 5.72455 8.82702 6.36429C8.82702 10.6987 8.97272 11.8199 9.79579 12.4297C10.6189 13.0396 11.5867 12.7317 15.8381 12.7317Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.8848 9.1223C19.934 6.33756 16.5134 1.84879 12.345 1.92599C12.0208 1.93178 11.7612 2.20195 11.7468 2.5252C11.6416 4.81493 11.7834 7.78204 11.8626 9.12713C11.8867 9.5459 12.2157 9.87493 12.6335 9.89906C14.0162 9.97818 17.0914 10.0862 19.3483 9.74467C19.6552 9.69835 19.88 9.43204 19.8848 9.1223Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <span class="nav-text">Core HR</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.admins.index') }}">Admins</a></li>
                    <li><a href="{{ route('admin.roles.index') }}">Roles</a></li>
                    <li><a href="{{ route('admin.users.index') }}">Users</a></li>
                </ul>
            </li>
            {{-- end hr --}}
            {{-- start location --}}
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <div class="menu-icon">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.64111 13.5497L9.38482 9.9837L12.5145 12.4421L15.1995 8.97684" stroke="#888888"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <ellipse cx="18.3291" cy="3.85021" rx="1.76201" ry="1.76201" stroke="#888888"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M13.6808 2.86012H7.01867C4.25818 2.86012 2.54651 4.81512 2.54651 7.57561V14.9845C2.54651 17.7449 4.22462 19.6915 7.01867 19.6915H14.9058C17.6663 19.6915 19.3779 17.7449 19.3779 14.9845V8.53213"
                                stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <span class="nav-text">Location</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.country.index') }}">Country</a></li>
                    <li><a href="{{ route('admin.city.index') }}">City</a></li>
                    <li><a href="{{ route('admin.district.index') }}">District</a></li>
                </ul>
            </li>
            {{-- end location --}}


            {{-- start publictransportation --}}
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <div class="menu-icon">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M14.9732 2.52102H7.0266C4.25735 2.52102 2.52118 4.48177 2.52118 7.25651V14.7438C2.52118 17.5186 4.2491 19.4793 7.0266 19.4793H14.9723C17.7507 19.4793 19.4795 17.5186 19.4795 14.7438V7.25651C19.4795 4.48177 17.7507 2.52102 14.9732 2.52102Z"
                                stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M7.73657 11.0002L9.91274 13.1754L14.2632 8.82493" stroke="#888888"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <span class="nav-text">Public Transportation</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.publictransportation.index') }}">Public Transportation</a></li>
                    <li><a href="{{ route('admin.publictransportationcity.index') }}">Public Transportation City</a></li>
                </ul>
            </li>
            {{-- end publictransportation --}}

            {{-- start Hotel Or Apartment --}}
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <div class="menu-icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M18.634 13.4211C18.634 16.7009 16.7007 18.6342 13.4209 18.6342H6.28738C2.99929 18.6342 1.06238 16.7009 1.06238 13.4211V6.27109C1.06238 2.99584 2.26688 1.06259 5.54763 1.06259H7.38096C8.03913 1.06351 8.65879 1.37242 9.05296 1.89951L9.88988 3.01234C10.2859 3.53851 10.9055 3.84834 11.5637 3.84926H14.1579C17.446 3.84926 18.6596 5.52309 18.6596 8.86984L18.634 13.4211Z"
                                stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M5.85754 12.2577H13.8646" stroke="#888888" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <span class="nav-text">Apps</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.hotel.index') }}">Hotel</a></li>
                    <li><a href="{{ route('admin.apartment.index') }}">Apartment</a></li>
                    <li><a href="{{ route('admin.cars.index') }}">Cars</a></li>
                </ul>
            </li>
            {{-- end Hotel Or Apartment --}}

            <li class="menu-title">OUR FEATURES</li>

            {{-- ---------start location group , group , tags--------- --}}
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <div class="menu-icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.11086 10.2878V13.7208" stroke="#888888" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M8.86244 12.0045H5.35974" stroke="#888888" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M13.0856 10.3924H12.9875" stroke="#888888" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M14.748 13.6691H14.6499" stroke="#888888" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M6.39948 0.833328C6.39948 1.5121 6.96092 2.06236 7.65349 2.06236H8.62193C9.69042 2.06617 10.5559 2.9144 10.5608 3.9616V4.5804"
                                stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M14.0593 19.1324C11.3045 19.1791 8.60026 19.1771 5.94166 19.1324C2.99069 19.1324 0.833313 17.0275 0.833313 14.1354V9.87325C0.833313 6.98107 2.99069 4.8762 5.94166 4.8762C8.61483 4.83051 11.321 4.83146 14.0593 4.8762C17.0102 4.8762 19.1666 6.98203 19.1666 9.87325V14.1354C19.1666 17.0275 17.0102 19.1324 14.0593 19.1324Z"
                                stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <span class="nav-text">Groups</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.group.index') }}">Group</a></li>
                    <li><a href="{{ route('admin.location.index') }}">Location</a></li>
                    <li><a href="{{ route('admin.tags.index') }}">Tags</a></li>
                    <li><a href="{{ route('admin.grouplocation.index') }}">Group Location</a></li>
                    <li><a href="{{ route('admin.taggroup.index') }}">Tag Group</a></li>
                </ul>
            </li>
            {{-- ---------end location group , group , tags--------- --}}


            {{-- start settings --}}
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <div class="menu-icon">
                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.46932 12.2102H0.693665" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M9.04547 3.32535H14.8211" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.99912 3.27573C4.99912 2.08805 4.02914 1.125 2.8329 1.125C1.63667 1.125 0.666687 2.08805 0.666687 3.27573C0.666687 4.46342 1.63667 5.42647 2.8329 5.42647C4.02914 5.42647 4.99912 4.46342 4.99912 3.27573Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.3333 12.1743C15.3333 10.9866 14.3641 10.0235 13.1679 10.0235C11.9709 10.0235 11.0009 10.9866 11.0009 12.1743C11.0009 13.3619 11.9709 14.325 13.1679 14.325C14.3641 14.325 15.3333 13.3619 15.3333 12.1743Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <span class="nav-text">Setting</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.socialMedia.index') }}">Social Media</a></li>
                    <li><a href="{{ route('admin.banner.index') }}">Banner</a></li>
                </ul>
            </li>
            {{-- start settings --}}





            {{-- start survey --}}
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <div class="menu-icon">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M14.9732 2.52102H7.0266C4.25735 2.52102 2.52118 4.48177 2.52118 7.25651V14.7438C2.52118 17.5186 4.2491 19.4793 7.0266 19.4793H14.9723C17.7507 19.4793 19.4795 17.5186 19.4795 14.7438V7.25651C19.4795 4.48177 17.7507 2.52102 14.9732 2.52102Z"
                                stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M7.73657 11.0002L9.91274 13.1754L14.2632 8.82493" stroke="#888888"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <span class="nav-text">Survey</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.questions.index') }}">Questions</a></li>
                    <li><a href="{{ route('admin.answers.index') }}">Answers</a></li>
                </ul>
            </li>
            {{-- end survey --}}
     
      
        </ul>
  
    </div>
</div>
