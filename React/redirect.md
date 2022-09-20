https://stackoverflow.com/questions/43230194/how-to-use-redirect-in-the-new-react-router-dom-of-reactjs


https://www.codegrepper.com/code-examples/javascript/how+to+use+redirect+in+react



redirect react jsjavascript by Grepper         on Jul 18 2019 Donate Comment
52
1
window.location.href = "http://mywebsite.com/home.html";
react redirect to urljavascript by Testy Tuatara on Jul 20 2020 Comment
8
1
import { Route, Redirect } from 'react-router'
2
​
3
<Route exact path="/" render={() => (
4
  loggedIn ? (
5
    <Redirect to="/dashboard"/>
6
  ) : (
7
    <PublicHomePage/>
8
  )
9
)}/>
Source: stackoverflow.com
react router redirectjavascript by Wicked Walrus on May 17 2020 Comment
4
1
<Route exact path="/">
2
  {loggedIn ? <Redirect to="/dashboard" /> : <PublicHomePage />}
3
</Route>
redirect react routerjavascript by Kaotik         on Mar 07 2020 Donate Comment
7
1
<Route exact path="/">
2
  {loggedIn ? <Redirect to="/profile" /> : <HomePage />}
3
</Route>
how to redirect react router from the app componentsjavascript by Salo Hopeless         on Jun 08 2020 Comment
6
state = { redirect: null };
1
state = { redirect: null };
2
​
3
render() {
4
  if (this.state.redirect) {
5
    return <Redirect to={this.state.redirect} />
6
  }
7
  return(
8
  // Your Code goes here
9
  )
10
}
11
​
12
// update the redirect
13
 this.setState({ redirect: "/someRoute" });
Source: dev.to
how to redirect to a website in reactjavascript by Shy Sable on Feb 22 2021 Comment
-1
window.location.href = 'http://domain.com';
1
