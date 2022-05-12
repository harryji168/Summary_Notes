$ git log


https://git-scm.com/book/en/v2/Git-Basics-Viewing-the-Commit-History


git rev-list --remotes


https://www.systutorials.com/how-to-list-all-commits-in-a-git-repository/




git log --pretty=format:"%h - %an, %ar : %s"


git log --pretty=format:"%h - %an, %ar : %s"
f6b3ee3 - Mao Li, 13 days ago : try catch => begin rescue
5860985 - Mao Li, 13 days ago : add spinner
c111c3c - Mao Li, 13 days ago : payment success
9a3aa48 - Mao Li, 13 days ago : front end set up
9830e5a - Mao Li, 13 days ago : gift user page
1ec6641 - Mao Li, 13 days ago : stripe with react set up
769add0 - Mao Li, 2 weeks ago : fix url of images
abd4838 - Mao Li, 2 weeks ago : fetch pokemon details
8c4ab9d - Mao Li, 2 weeks ago : add navigation
4028eb4 - Mao Li, 2 weeks ago : display pokemon list and styling
4105a21 - Mao Li, 2 weeks ago : react native basics set up, home screen and fetch data from api
1ce10bd - Mao Li, 2 weeks ago : Merge branch 'main' of github.com:CodeCoreYVR/class_demos_bootcamp_aug_2021 into main
4aa098d - Mao Li, 2 weeks ago : react native app pokedex
95e9f87 - stephanie-warmenhoven, 3 weeks ago : Geocoding with Google Maps
8b02069 - stephanie-warmenhoven, 3 weeks ago : GitHub Oauth
c217620 - stephanie-warmenhoven, 3 weeks ago : Add FormErrors for New Question Validations React Client
06801c9 - stephanie-warmenhoven, 3 weeks ago : Fixed syntax error in questions_controller
3c5cd3f - stephanie-warmenhoven, 3 weeks ago : Add NotFoundPage component to React client
a26f0ad - stephanie-warmenhoven, 3 weeks ago : Handle Validation Errors questions_controller API
c40da77 - stephanie-warmenhoven, 3 weeks ago : Handle Validation Errors application_controller
e1c8572 - stephanie-warmenhoven, 3 weeks ago : Handle Record not Found API
d191309 - stephanie-warmenhoven, 3 weeks ago : Handle 404 not Found API route
124fbaf - Mao Li, 3 weeks ago : js webpack babel
0697f73 - Mao Li, 3 weeks ago : js webpack plugins
1abb22b - Mao Li, 3 weeks ago : js webpack config entry, output, file-loader
86655e7 - Mao Li, 3 weeks ago : react hooks useContext hook
365c368 - Mao Li, 3 weeks ago : react hooks context system without useContext hook
1195bb7 - Mao Li, 3 weeks ago : react hooks refactor app.js
e5ea466 - Mao Li, 3 weeks ago : react hooks refactor questionshowpage
f83d099 - Mao Li, 3 weeks ago : react hooks refactor questionindexpage
a8e89b2 - Mao Li, 3 weeks ago : react hooks useEffect hook
e516ed6 - Mao Li, 3 weeks ago : react hooks refactor sign in page into hooks
d547fbe - Mao Li, 3 weeks ago : react hooks useState example
b735e9e - stephanie-warmenhoven, 3 weeks ago : Add Sign Up functionality to React client
ff4891f - stephanie-warmenhoven, 3 weeks ago : Add create action to api users_controller with corresponding routes:
1218bf8 - stephanie-warmenhoven, 3 weeks ago : Add AuthRoute for NewQuestionPage
1938a41 - stephanie-warmenhoven, 3 weeks ago : Add Sign Out functionality to React Client
b46631a - stephanie-warmenhoven, 3 weeks ago : Add api/v1/users_controller and routes to receive http req for current user
3cbf6c2 - stephanie-warmenhoven, 3 weeks ago : Add SignInPage and store currentUser in React Client
f00b8b6 - stephanie-warmenhoven, 3 weeks ago : Add NewQuestionPage
0016b85 - stephanie-warmenhoven, 4 weeks ago : Add Link to questions on QuestionIndexPage to navigate to show page
a81d088 - stephanie-warmenhoven, 4 weeks ago : Fixed QuestionShowPage display of data
b13730c - stephanie-warmenhoven, 4 weeks ago : Add NavBar component and use NavLink from react-router-dom library
ad3d92d - stephanie-warmenhoven, 4 weeks ago : Include dynamic id for QuestionShowPage fetch request through params available through react-router-dom v5
040ae30 - stephanie-warmenhoven, 4 weeks ago : Add Routes with react-router-dom version '^6.0.2' and element
50e8f6e - stephanie-warmenhoven, 4 weeks ago : Add Router with react-router-dom version '^5.2.0'
77b9179 - stephanie-warmenhoven, 4 weeks ago : Fetched Question for Question Show page and got rid of errors - display pending
ca5bb89 - stephanie-warmenhoven, 4 weeks ago : Fetch all Questions from API for Index page
15c6035 - stephanie-warmenhoven, 4 weeks ago : Added localhost:3001 to whitelist for CORS
e10308f - stephanie-warmenhoven, 4 weeks ago : http requests and Hacky Sign In
48647a9 - stephanie-warmenhoven, 4 weeks ago : Lifecycle Methods CurrentDateTime component demo


https://stackoverflow.com/questions/46913896/is-there-a-way-to-revert-to-a-previous-commit-in-vs-code


Provided that you have GitLens extension installed you should be able to simply select "Restore" action from selected "File history" commit.