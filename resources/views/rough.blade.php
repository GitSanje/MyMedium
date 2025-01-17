{{-- <!-- sidebar -->
    <div
        class="fixed top-0 left-0 h-full w-64
         bg-white  shadow-lg overflow-y-auto
         transform -translate-x-full 
                transition-transform duration-300
                ease-in-out z-50
        ">
        <div class="p-6">
            <div class="text-center mb-4">
                <img src=
                            "https://media.geeksforgeeks.org/wp-content/uploads/20240429130139/employee.png"
                    alt="Profile Picture"
                    class="rounded-full 
                                                        mx-auto mb-2">
                <h3 class="text-lg font-semibold">
                    Sahil Trivedi
                </h3>
                <p class="text-gray-600">
                    Web Developer
                </p>

            </div>
            <h4 class="text-xl font-semibold mb-2">
                About Me
            </h4>
            <p class="text-gray-700 mb-6">
                I'm a passionate web developer with
                a love for coding and creating amazing
                digital experiences.
            </p>
            <h4 class="text-xl font-semibold mb-2">
                Popular Posts
            </h4>
            <ul>
                <li
                    class="flex items-center mb-4
                            transition duration-300 
                           ease-in-out transform 
                           hover:-translate-x-2">
                    <img src=
                                "https://media.geeksforgeeks.org/wp-content/uploads/20240117155347/responsive-web-design-copy.webp"
                        alt="Post Image"
                        class="w-16 h-16 object-cover
                                                                rounded-md mr-2">
                    <div>
                        <a href="#"
                            class="text-blue-500
                                                                             hover:underline read-more"
                            data-title="Responsive Web Design">
                            Responsive Web Design
                        </a>
                        <p
                            class="text-sm 
                                                                  text-gray-600">
                            March 21, 2024
                        </p>
                    </div>
                </li>
                <li
                    class="flex items-center mb-4 
                            transition duration-300 
                            ease-in-out transform 
                            hover:-translate-x-2">
                    <img src=
                          "https://media.geeksforgeeks.org/wp-content/uploads/20230809133232/JavaScript-Complete-Guide-copy-2.webp"
                        alt="Post Image"
                        class="w-16 h-16 object-cover
                                 rounded-md mr-2">
                    <div>
                        <a href="#"
                            class="text-blue-500
                                              hover:underline 
                                            read-more"
                            data-title="JavaScript Fundamentals">
                            JavaScript Fundamentals
                        </a>
                        <p class="text-sm text-gray-600">
                            March 18, 2024
                        </p>
                    </div>
                </li>


            </ul>

        </div>





    </div>
     --}}
    <!-- hamburg div -->
    {{-- <div
        class="fixed top-0 left-0
        p-4 cursor-pointer
        z-50 transition 
        duration-300 ease-in-out
        transform hover:scale-110">

        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-500 
            hover:text-gray-700"
            fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
            </path>
        </svg>
    </div> --}}

     {{-- <div
                class="blog-post bg-white
             rounded-lg overflow-hidden
             shadow-md hover:shadow-lg
             transition duration-300 
             ease-in-out transform 
             hover:-translate-y-1">

                <img src=
                      "https://media.geeksforgeeks.org/wp-content/uploads/20240117155347/responsive-web-design-copy.webp"
                    alt="Blog Post Image"
                    class="w-full h-40 
                            object-cover 
                            rounded-t-lg">
                <div class="p-6">
                    <h2 class="text-xl 
                                           font-semibold mb-2">
                        Responsive Web Design
                    </h2>
                    <p class="text-gray-700 mb-4">
                        Learn how to create responsive
                        web designs that look great on all
                        devices.
                    </p>
                    <div class="flex items-center 
                                            justify-between">
                        <p class="text-sm text-gray-600">
                            March 21, 2024
                        </p>
                        <a href="#"
                            class="text-blue-500
                                                       hover:underline 
                                                       read-more"
                            data-title="Responsive Web Design">
                            Read More
                        </a>
                    </div>
                </div>

            </div>
            <div
                class="blog-post bg-white rounded-lg 
                overflow-hidden shadow-md 
                hover:shadow-lg transition 
                duration-300 ease-in-out 
                transform hover:-translate-y-1">
                <img src=
                "https://media.geeksforgeeks.org/wp-content/uploads/20230809133232/JavaScript-Complete-Guide-copy-2.webp"
                    alt="Blog Post Image" class="w-full h-40 object-cover 
                rounded-t-lg">
                <div class="p-6">
                    <h2 class="text-xl 
                   font-semibold mb-2">
                        JavaScript Fundamentals
                    </h2>
                    <p class="text-gray-700 mb-4">
                        Get started with JavaScript and
                        master the fundamentals of this
                        powerful programming language.
                    </p>
                    <div class="flex items-center 
                    justify-between">
                        <p class="text-sm text-gray-600">
                            March 18, 2024
                        </p>
                        <a href="#"
                            class="text-blue-500
                               hover:underline
                               read-more"
                            data-title="JavaScript Fundamentals">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="blog-post bg-white rounded-lg 
                        overflow-hidden shadow-md 
                        hover:shadow-lg transition 
                        duration-300 ease-in-out 
                        transform hover:-translate-y-1">
                <img src=
                  "https://media.geeksforgeeks.org/wp-content/uploads/20240507112025/75s2.png"
                    alt="Blog Post Image" class="w-full h-40 object-cover
                            rounded-t-lg">
                <div class="p-6">
                    <h2 class="text-xl 
                               font-semibold mb-2">
                        CSS Flexbox Tutorial
                    </h2>
                    <p class="text-gray-700 mb-4">
                        Learn how to use CSS Flexbox to
                        create flexible layouts with ease.
                    </p>
                    <div class="flex items-center 
                                justify-between">
                        <p class="text-sm text-gray-600">
                            March 15, 2024
                        </p>
                        <a href="#"
                            class="text-blue-500
                                  hover:underline read-more"
                            data-title="CSS Flexbox Tutorial">
                            Read More
                        </a>
                    </div>
                </div>
            </div> --}}


               {{-- <div class="bg-gray-800 bg-opacity-75 
            flex items-center justify-center
            z-50 hidden fixed top-0 left-0
            w-full h-full overflow-y-auto">
    
    
            <div class="bg-white p-8 
                rounded-lg 
                max-w-xl w-full">
        <h2 id="modal-title" 
            class="text-2xl 
                   font-semibold mb-4">
        </h2>
        <div id="modal-content" 
             class="text-gray-700">
        </div>
        <button id="close-modal" 
                class="mt-6 px-4 py-2 
                       bg-blue-500
                       text-white rounded 
                       hover:bg-blue-600">
            Close
     </button>
            </div> --}}

            <script>
                const toggleButton = document.querySelector(
                    '.fixed.top-0.left-0.p-4.cursor-pointer.z-50');
                const sidebar = document.querySelector(
                    '.fixed.top-0.left-0.h-full.w-64.bg-white.shadow-lg.overflow-y-auto.transform.-translate-x-full.transition-transform.duration-300.ease-in-out.z-50'
                );
                const readMoreLinks = document.querySelectorAll('.read-more');

                const modal = document.querySelector(
                    '.bg-gray-800.bg-opacity-75.flex.items-center.justify-center.z-50.hidden');
                const modalTitle = document.getElementById('modal-title');
                const modalContent = document.getElementById('modal-content');
                const closeModalButton = document.getElementById('close-modal');


                toggleButton.addEventListener('click', () => {
                    sidebar.classList.toggle('-translate-x-full');
                    document.body.classList.toggle('blur');
                })

                readMoreLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
             
                const postTitle = link.dataset.title;
                modalTitle.textContent = postTitle;
                if (postTitle === 'Responsive Web Design') {
                    modalContent.innerHTML = `
                        <img src=
                     "https://media.geeksforgeeks.org/wp-content/uploads/20240117155347/responsive-web-design-copy.webp" alt="Responsive Web Design" class="w-full mb-4">
                        <p>Responsive Web Design refers to the
                           approach of designing and developing 
                           websites that can adapt and display 
                           correctly on various devices and screen
                           sizes. The goal is to create a seamless
                           and user-friendly experience regardless
                           of whether the user is accessing the 
                           website on a desktop, tablet, or 
                           mobile device.

                          </p>`;
                } else if (postTitle === 'JavaScript Fundamentals') {
                    modalContent.innerHTML = `
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20230809133232/JavaScript-Complete-Guide-copy-2.webp" alt="JavaScript Fundamentals" class="w-full mb-4">
                        <p>JavaScript Fundamentals cover the 
                           foundational concepts and principles
                           of the JavaScript programming language.
                           JavaScript Fundamentals provide the 
                           necessary knowledge and skills to 
                           build interactive and dynamic web 
                           applications, enhance user experience,
                           and work with frameworks and libraries
                           built on top of JavaScript, such as 
                           React, Vue.js, Angular, and Node.js.
                       </p>
                    `;
                } else if (postTitle === 'CSS Flexbox Tutorial') {
                    modalContent.innerHTML = `
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20240507112025/75s2.png" alt="CSS Flexbox Tutorial" class="w-full mb-4">
                        <p>A CSS Flexbox tutorial typically covers
                           the Flexbox layout model, which is 
                           designed to provide a more efficient
                           way to layout, align, and distribute
                           space among items in a container. 
                           Here's an outline of what a CSS 
                           Flexbox tutorial might include
                          </p>
                    `;
                }
                else {
                    modalContent.textContent =
                        "Full details of " + postTitle + " go here.";
                }
                modal.classList.remove('hidden');
            });
        });

        closeModalButton.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

            </script>
