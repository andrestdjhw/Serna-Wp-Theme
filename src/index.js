import Person from "./scripts/Person"
import ExampleReactComponent from "./scripts/ExampleReactComponent"
import NavbarComponent from "./scripts/NavbarComponent"
import FooterComponent from "./scripts/FooterComponent"
import React from "react"
import ReactDOM from "react-dom/client"

const person1 = new Person("Brad")

// Mount the navbar
if (document.querySelector("#navbar-root")) {
  const navRoot = ReactDOM.createRoot(document.querySelector("#navbar-root"))
  navRoot.render(<NavbarComponent />)
}

// Mount the example component
if (document.querySelector("#render-react-example-here")) {
  const root = ReactDOM.createRoot(document.querySelector("#render-react-example-here"))
  root.render(<ExampleReactComponent />)
}

// Mount the footer
if (document.querySelector("#footer-root")) {
  const footerRoot = ReactDOM.createRoot(document.querySelector("#footer-root"))
  footerRoot.render(<FooterComponent />)
}