package com.example.app

import org.scalatra._
import scalate.ScalateSupport

// JSON-related libraries
import org.json4s.{DefaultFormats, Formats}

// JSON handling support from Scalatra
import org.scalatra.json._

class MyScalatraServlet extends MyScalatraWebAppStack with JacksonJsonSupport {
	
	// Sets up automatic case class to JSON output serialization
  protected implicit val jsonFormats: Formats = DefaultFormats.withBigDecimal

  // Before every action runs, set the content type to be in JSON format.
  before() {
    contentType = formats("json")
  }

  	get("/argi") {
    	TestData.test
 	}
  
}

//model class
case class Test(slug: String, name: String)


//data store
object TestData {
	
	var test = List(
		Test("name","argi"),
		Test("lang","scala"))
	
}
