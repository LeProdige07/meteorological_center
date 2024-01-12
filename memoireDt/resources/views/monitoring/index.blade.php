@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 my-2">
                <div class="">
                    <div class="card-header text-center display-6">{{ __('Monitoring') }} du site : {{ $site->name }}</div>
                    <br>
                    <div class="container text-center">
                        <!-- Bouton flottant à droite avec fond bleu -->
                        <a href="{{ url('/graphiques/' . $site->id) }}" class="btn btn-primary">Graphiques &#128185</a>

                        <a href="{{ url('/') }}" class="btn btn-primary">Retour &#128281</a>

                        <a href="{{ url('/tableau/' . $site->id) }}" class="btn btn-primary">Tableau &#127998</a>
                    </div><hr>
                    
                    <br>
                </div>
            </div>
            <br>
            <br>
            @if (!$monitorings)
                <div class="col-md-6 my-2">
                    <div class="card">
                        <div class="card-body">
                            <p class="h3">Pas de données disponible pour ce site</p>
                        </div>
                    </div>
                </div>
            @else
                <div class="col-md-3 my-2">
                    <div class="card">
                        <div class="card-header bg-success text-center">{{ __('Température') }}</div>

                        <div class="card-body">
                            <p class="text-center text-secondary">{{ $monitorings->temperature }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M15 13V5a3 3 0 0 0-6 0v8a5 5 0 1 0 6 0m-3-9a1 1 0 0 1 1 1v3h-2V5a1 1 0 0 1 1-1" />
                                </svg>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-2 ">
                    <div class="card">
                        <div class="card-header bg-success text-center">{{ __('Humidité') }}</div>

                        <div class="card-body">
                            <p class="text-center text-secondary">{{ $monitorings->humidite }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M14.5 18q.625 0 1.063-.437T16 16.5q0-.625-.437-1.062T14.5 15q-.625 0-1.062.438T13 16.5q0 .625.438 1.063T14.5 18m-5.75-.75q.3.3.7.3t.7-.3l5.1-5.1q.3-.3.3-.7t-.3-.7q-.3-.3-.712-.3t-.713.3L8.75 15.825q-.3.3-.3.713t.3.712M9.5 13q.625 0 1.063-.437T11 11.5q0-.625-.437-1.062T9.5 10q-.625 0-1.062.438T8 11.5q0 .625.438 1.063T9.5 13m2.5 9q-3.425 0-5.712-2.35T4 13.8q0-1.55.7-3.1t1.75-2.975Q7.5 6.3 8.725 5.05T11 2.875q.2-.2.463-.287T12 2.5q.275 0 .538.088t.462.287q1.05.925 2.275 2.175t2.275 2.675Q18.6 9.15 19.3 10.7t.7 3.1q0 3.5-2.287 5.85T12 22m0-2q2.6 0 4.3-1.763T18 13.8q0-1.825-1.513-4.125T12 4.65Q9.025 7.375 7.513 9.675T6 13.8q0 2.675 1.7 4.438T12 20m0-8" />
                                </svg>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-2">
                    <div class="card">
                        <div class="card-header bg-success text-center">{{ __('Pression Atmosphérique') }}</div>

                        <div class="card-body">
                            <p class="text-center text-secondary">{{ $monitorings->pression_atm }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" d="M20.693 17.33a9 9 0 1 0-17.386 0" />
                                        <path
                                            d="M12.766 15.582c.487.71.144 1.792-.766 2.417c-.91.626-2.043.558-2.53-.151c-.52-.756-2.314-5.007-3.403-7.637c-.205-.495.4-.911.79-.542c2.064 1.96 5.39 5.157 5.909 5.913Z" />
                                        <path stroke-linecap="round"
                                            d="M12 6v2m-6.364.636L7.05 10.05m11.314-1.414L16.95 10.05m3.743 7.28l-1.931-.518m-15.455.518l1.931-.518" />
                                    </g>
                                </svg>
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-2">
                    <div class="card">
                        <div class="card-header bg-success text-center">{{ __('Luminosité') }}</div>

                        <div class="card-body">
                            <p class="text-center text-secondary">{{ $monitorings->luminosite }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                                    <g fill="none">
                                        <path fill="#2F88FF" stroke="#000" stroke-linejoin="round" stroke-width="4"
                                            d="M24.0205 35.3535C30.0956 35.3535 35.0205 30.4286 35.0205 24.3535C35.0205 18.2784 30.0956 13.3535 24.0205 13.3535C17.9454 13.3535 13.0205 18.2784 13.0205 24.3535C13.0205 30.4286 17.9454 35.3535 24.0205 35.3535Z" />
                                        <path stroke="#000" stroke-linecap="round" stroke-width="4"
                                            d="M38.9603 9.00977L36.5 11.4842" />
                                        <path stroke="#000" stroke-linecap="round" stroke-width="4"
                                            d="M11.0674 36.7451L9.02051 38.8037" />
                                        <path stroke="#000" stroke-linecap="round" stroke-width="4"
                                            d="M24 41.3533L24 44.3533" />
                                        <path stroke="#000" stroke-linecap="round" stroke-width="4"
                                            d="M43.9998 23.3535L39.9998 23.3535" />
                                        <path stroke="#000" stroke-linecap="round" stroke-width="4"
                                            d="M37.5324 36.3361L39.9998 38.8035" />
                                        <path fill="#fff" fill-rule="evenodd"
                                            d="M24.0205 17.3535C20.1545 17.3535 17.0205 20.4875 17.0205 24.3535C17.0205 28.2195 20.1545 31.3535 24.0205 31.3535"
                                            clip-rule="evenodd" />
                                        <path stroke="#000" stroke-linecap="round" stroke-width="4"
                                            d="M4.00019 24.3535L8.00019 24.3535" />
                                        <path stroke="#000" stroke-linecap="round" stroke-width="4"
                                            d="M10.0444 9.00974L12.0972 11.0625" />
                                        <path stroke="#000" stroke-linecap="round" stroke-width="4"
                                            d="M24 3.35371L24 7.35371" />
                                    </g>
                                </svg>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-2">
                    <div class="card">
                        <div class="card-header bg-success text-center">{{ __('Détection de pluie') }}</div>

                        <div class="card-body">
                            <p class="text-center text-secondary">{{ $monitorings->detection_pluie }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 32 32">
                                    <path fill="currentColor"
                                        d="M25.37 7.306a7.252 7.252 0 0 0-7.247-7.08a7.24 7.24 0 0 0-6.208 3.518a4.163 4.163 0 0 0-2.01-.517a4.22 4.22 0 0 0-4.216 4.066a5.987 5.987 0 0 0-4.128 5.686c0 3.31 2.687 6 6 6v-.003h15.874c3.312 0 6-2.688 6-6a5.993 5.993 0 0 0-4.065-5.67m-1.934 9.673H7.56a4.01 4.01 0 0 1-4-4.002c-.002-1.982 1.45-3.618 3.35-3.93a.998.998 0 0 0 .657-.415c.155-.223.212-.497.163-.763a2.284 2.284 0 0 1-.045-.424a2.224 2.224 0 0 1 2.22-2.218c.647 0 1.217.278 1.633.73a.997.997 0 0 0 1.675-.32c.75-1.992 2.662-3.412 4.91-3.41a5.258 5.258 0 0 1 5.252 5.25c0 .16-.01.325-.027.496c-.05.517.305.984.815 1.08c1.86.343 3.274 1.965 3.27 3.922a4.005 4.005 0 0 1-3.997 4.003zM9.03 26.68c0-1.115.02-5.425.02-5.432a1.001 1.001 0 0 0-1.728-.692c-.005.008-1.036 1.098-2.08 2.342a25.656 25.656 0 0 0-1.463 1.896c-.4.648-.754 1.066-.812 1.885a3.037 3.037 0 0 0 3.032 3.034a3.036 3.036 0 0 0 3.03-3.032zm-4.06.045c.092-.35 1.082-1.72 1.994-2.764l.076-.09c-.005 1.125-.01 2.295-.01 2.81c0 .566-.46 1.027-1.03 1.03a1.038 1.038 0 0 1-1.03-.986m11.455-.045c0-1.115.02-5.424.02-5.43a1 1 0 0 0-1.727-.692c-.006.008-1.035 1.094-2.08 2.342a25.344 25.344 0 0 0-1.463 1.894c-.4.65-.753 1.068-.81 1.888a3.031 3.031 0 0 0 6.06-.002m-4.06.047c.092-.35 1.08-1.72 1.993-2.766l.075-.09c-.005 1.124-.01 2.295-.01 2.808a1.035 1.035 0 0 1-1.03 1.03c-.553-.003-1-.44-1.028-.983zm10.906-6.413a.996.996 0 0 0-1.098.24a56.757 56.757 0 0 0-2.08 2.342c-.523.624-1.05 1.284-1.462 1.895c-.402.65-.754 1.067-.812 1.886a3.029 3.029 0 1 0 6.057 0c0-1.114.022-5.424.022-5.43a.999.999 0 0 0-.626-.933zm-1.39 6.364a1.036 1.036 0 0 1-1.032 1.03a1.033 1.033 0 0 1-1.028-.982c.092-.35 1.08-1.72 1.993-2.765c.025-.028.05-.06.074-.088c-.004 1.123-.008 2.292-.008 2.806z" />
                                </svg>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-2">
                    <div class="card">
                        <div class="card-header bg-success text-center">{{ __('Precipitation') }}</div>

                        <div class="card-body">
                            <p class="text-center text-secondary">{{ $monitorings->precipitation }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                    viewBox="0 0 32 32">
                                    <path fill="currentColor"
                                        d="M16 16h2v2h-2zm2 2h2v2h-2zm2 2h2v2h-2zm0-4h2v2h-2zm-4 4h2v2h-2zm4-8a3.898 3.898 0 0 1-4-3.777a3.902 3.902 0 0 1 .653-2.064l2.517-3.745a1.038 1.038 0 0 1 1.66 0l2.485 3.696A3.97 3.97 0 0 1 24 8.223A3.898 3.898 0 0 1 20 12m0-7.237l-1.656 2.463a1.89 1.89 0 0 0-.344.997A1.9 1.9 0 0 0 20 10a1.9 1.9 0 0 0 2-1.777a1.98 1.98 0 0 0-.375-1.047z" />
                                    <path fill="currentColor"
                                        d="M28 4a2.002 2.002 0 0 0-2 2v20H6V10h2v8l1 2l1-2v-8h2v4l1 2l1-2V8H6V6a2.002 2.002 0 0 0-2-2H2v2h2v20a2.002 2.002 0 0 0 2 2h20a2.002 2.002 0 0 0 2-2V6h2V4Z" />
                                </svg>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-2">
                    <div class="card">
                        <div class="card-header bg-success text-center">{{ __('Vitesse du vent') }}</div>

                        <div class="card-body">
                            <p class="text-center text-secondary">{{ $monitorings->vitesse_vent }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M20.27,4.74a4.93,4.93,0,0,1,1.52,4.61,5.32,5.32,0,0,1-4.1,4.51,5.12,5.12,0,0,1-5.2-1.5,5.53,5.53,0,0,0,6.13-1.48A5.66,5.66,0,0,0,20.27,4.74ZM12.32,11.53a5.49,5.49,0,0,0-1.47-6.2A5.57,5.57,0,0,0,4.71,3.72,5.17,5.17,0,0,1,9.53,2.2,5.52,5.52,0,0,1,13.9,6.45,5.28,5.28,0,0,1,12.32,11.53ZM19.2,20.29a4.92,4.92,0,0,1-4.72,1.49,5.32,5.32,0,0,1-4.34-4.05A5.2,5.2,0,0,1,11.6,12.5a5.6,5.6,0,0,0,1.51,6.13A5.63,5.63,0,0,0,19.2,20.29ZM3.79,19.38A5.18,5.18,0,0,1,2.32,14a5.3,5.3,0,0,1,4.59-4,5,5,0,0,1,4.58,1.61,5.55,5.55,0,0,0-6.32,1.69A5.46,5.46,0,0,0,3.79,19.38ZM12.23,12a5.11,5.11,0,0,0,3.66-5,5.75,5.75,0,0,0-3.18-6,5,5,0,0,1,4.42,2.3,5.21,5.21,0,0,1,.24,5.92A5.4,5.4,0,0,1,12.23,12ZM11.76,12a5.18,5.18,0,0,0-3.68,5.09,5.58,5.58,0,0,0,3.19,5.79c-1,.35-2.9-.46-4-1.68A5.51,5.51,0,0,1,11.76,12ZM23,12.63a5.07,5.07,0,0,1-2.35,4.52,5.23,5.23,0,0,1-5.91.2,5.24,5.24,0,0,1-2.67-4.77,5.51,5.51,0,0,0,5.45,3.33A5.52,5.52,0,0,0,23,12.63ZM1,11.23a5,5,0,0,1,2.49-4.5,5.23,5.23,0,0,1,5.81-.06,5.3,5.3,0,0,1,2.61,4.74A5.56,5.56,0,0,0,6.56,8.06,5.71,5.71,0,0,0,1,11.23Z">
                                        <animateTransform attributeName="transform" dur="1.5s"
                                            repeatCount="indefinite" type="rotate" values="0 12 12;360 12 12" />
                                    </path>
                                </svg>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-2">
                    <div class="card">
                        <div class="card-header bg-success text-center">{{ __('Direction du vent') }}</div>

                        <div class="card-body">
                            <p class="text-center text-secondary">{{ $monitorings->direction_vent }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                    viewBox="0 0 48 48">
                                    <g fill="none">
                                        <rect width="36" height="36" x="6" y="6" fill="#2F88FF" stroke="#000"
                                            stroke-width="4" rx="3" />
                                        <path fill="#fff"
                                            d="M23.293 10.5649L20.0504 13.8075C19.4204 14.4375 19.8666 15.5146 20.7575 15.5146H27.2428C28.1337 15.5146 28.5798 14.4375 27.9499 13.8075L24.7072 10.5649C24.3167 10.1744 23.6835 10.1744 23.293 10.5649Z" />
                                        <path fill="#fff"
                                            d="M10.5649 24.707L13.8075 27.9496C14.4375 28.5796 15.5146 28.1334 15.5146 27.2425V20.7572C15.5146 19.8663 14.4375 19.4202 13.8075 20.0501L10.5649 23.2928C10.1744 23.6833 10.1744 24.3165 10.5649 24.707Z" />
                                        <path fill="#fff"
                                            d="M24.707 37.4351L27.9496 34.1925C28.5796 33.5625 28.1334 32.4854 27.2425 32.4854H20.7572C19.8663 32.4854 19.4202 33.5625 20.0501 34.1925L23.2928 37.4351C23.6833 37.8256 24.3165 37.8256 24.707 37.4351Z" />
                                        <path fill="#fff"
                                            d="M37.4351 23.293L34.1925 20.0504C33.5625 19.4204 32.4854 19.8666 32.4854 20.7575V27.2428C32.4854 28.1337 33.5625 28.5798 34.1925 27.9499L37.4351 24.7072C37.8256 24.3167 37.8256 23.6835 37.4351 23.293Z" />
                                    </g>
                                </svg>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-2">
                    <div class="card">
                        <div class="card-header bg-success text-center">{{ __('Qualité de  l air') }}</div>

                        <div class="card-body">
                            <p class="text-center text-secondary">{{ $monitorings->qualite_air }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                    viewBox="0 0 48 48">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M11.03 26.383c-1.636-.129-3.865-1.073-3.814-5.103c.004-.442.027-.875.064-1.308m.24-1.714C9.003 10.433 15.76 4.5 24 4.5m-3.401 30.457a3.4 3.4 0 0 0 6.8 0m-7.507-7.884h8.213m-8.213-2.886a10.509 10.509 0 0 1 8.213 0m0 5.773a10.509 10.509 0 0 1-8.213 0" />
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M16.833 21.77L9.447 17.9a1.581 1.581 0 0 0-2.065.545h0a1.581 1.581 0 0 0 .616 2.266l6.65 3.367m2.185-5.27v-1.446m20.803 1.018a13.872 13.872 0 0 0-3.576-6.74a1.042 1.042 0 0 0-1.7.276a3.622 3.622 0 0 1-.599.852c-.534.59-1.276.976-2.072.976a2.934 2.934 0 0 1-2.847-2.238A2.924 2.924 0 0 1 24 13.744a2.93 2.93 0 0 1-2.846-2.238a2.93 2.93 0 0 1-2.847 2.238c-.797 0-1.534-.387-2.073-.976c-.322-.355-.539-.691-.672-1.013c-.24-.585-1.027-.724-1.47-.277a13.925 13.925 0 0 0-3.73 6.9" />
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="m10.067 21.754l.013.3a13.86 13.86 0 0 0 .95 4.33c1.948 4.886 6.6 8.465 12.063 8.81c7.948.502 14.574-5.659 14.837-13.435M13.552 40.266h3.821V43.5" />
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M30.7 33.493c2.269 2.124 3.798 5.302 4.058 8.908a1.01 1.01 0 0 1-.998 1.099H14.24c-.592 0-1.041-.51-.999-1.1c.26-3.605 1.79-6.783 4.058-8.907M40.72 19.972c.037.433.06.866.065 1.308c.05 4.03-2.18 4.975-3.814 5.103M24 4.5c8.24 0 14.997 5.933 16.48 13.758m-9.27 14.958s2.684-3.715 2.141-9.139c0 0-3.641-5.191-9.35-5.191h-.003c-5.708 0-9.35 5.191-9.35 5.191c-.542 5.424 2.142 9.139 2.142 9.139" />
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="m31.167 21.77l7.386-3.871a1.581 1.581 0 0 1 2.065.545h0c.506.789.22 1.843-.616 2.266l-6.65 3.367m-2.185-5.269v-1.446m3.281 22.904h-3.821V43.5" />
                                </svg>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-2">
                    <div class="card">
                        <div class="card-header bg-success text-center">{{ __('Température ressentie') }}</div>

                        <div class="card-body">
                            <p class="text-center text-secondary">{{ $monitorings->temperature_ressentie }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                    viewBox="0 0 32 32">
                                    <path fill="currentColor"
                                        d="M26 30h-4a2.006 2.006 0 0 1-2-2v-7a2.006 2.006 0 0 1-2-2v-6a2.947 2.947 0 0 1 3-3h6a2.947 2.947 0 0 1 3 3v6a2.006 2.006 0 0 1-2 2v7a2.006 2.006 0 0 1-2 2m-5-18a.945.945 0 0 0-1 1v6h2v9h4v-9h2v-6a.945.945 0 0 0-1-1zm3-3a4 4 0 1 1 4-4a4.012 4.012 0 0 1-4 4m0-6a2 2 0 1 0 2 2a2.006 2.006 0 0 0-2-2M10 20.184V12H8v8.184a3 3 0 1 0 2 0" />
                                    <path fill="currentColor"
                                        d="M9 30a6.993 6.993 0 0 1-5-11.89V7a5 5 0 0 1 10 0v11.11A6.993 6.993 0 0 1 9 30M9 4a3.003 3.003 0 0 0-3 3v11.983l-.332.299a5 5 0 1 0 6.664 0L12 18.983V7a3.003 3.003 0 0 0-3-3" />
                                </svg>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-2">
                    <div class="card">
                        <div class="card-header bg-success text-center">{{ __('Pointe de la rosée') }}</div>

                        <div class="card-body">
                            <p class="text-center text-secondary">{{ $monitorings->pointe_rosee }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                    viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M20.44 20.26v64.66C130.8 72.49 291.4 112.6 370.5 191.6c-85.9-43.8-244.7-73.2-350.06-64v84.5C88.45 328.6 217.2 253.7 325.8 222c61-11.5 72.7 19.7 108.2 30.2c-11.5-20.6-22.4-39.3-32.8-56.3c23.3-9.9 39.8-33 39.8-59.9c0-35.8-29.2-65-65-65c-19.3 0-36.7 8.53-48.7 22c-58.6-64.95-101.4-66.71-157.4-72.74zM373.8 88.08c5.7-.07 11.6.94 17.7 3.27c-28.8 4.05-34.2 63.55 27 52.75c10.5-1.9-3.6 29.9-26.5 37.1c-19.5-31-37.3-55.8-53.7-75.6c9.1-10.29 21.4-17.33 35.5-17.52M432 286.5l-7.7 12.9s-12.3 20.4-24.5 46.8C387.6 372.7 375 405 375 432c0 14.7 7.7 28.4 18.2 38.8c10.4 10.5 24.1 18.2 38.8 18.2c14.7 0 28.4-7.7 38.8-18.2c10.5-10.4 18.2-24.1 18.2-38.8c0-27-12.6-59.3-24.8-85.8c-12.2-26.4-24.5-46.8-24.5-46.8zm-20.1 77c-16.6 49.1-12.6 99 58.7 72c-2.7 26.2-43.6 56.9-71.5 15.4c-12.1-18-12.7-50.1 12.8-87.4" />
                                </svg>
                            </p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
