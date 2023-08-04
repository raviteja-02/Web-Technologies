# HTML Common Tags

This section covers some of the most common HTML tags that are used to structure web pages:

## List

Lists allow you to organize information in an ordered or unordered manner. Here are examples of both types:

```html
<!-- Unordered List -->
<ul>
  <li>Item 1</li>
  <li>Item 2</li>
  <li>Item 3</li>
</ul>

<!-- Ordered List -->
<ol>
  <li>First Item</li>
  <li>Second Item</li>
  <li>Third Item</li>
</ol>
```

## Tables

Tables are used to present data in rows and columns. You can define table headers, rows, and cells using the following tags:

```html
<table>
  <tr>
    <th>Header 1</th>
    <th>Header 2</th>
  </tr>
  <tr>
    <td>Row 1, Cell 1</td>
    <td>Row 1, Cell 2</td>
  </tr>
  <tr>
    <td>Row 2, Cell 1</td>
    <td>Row 2, Cell 2</td>
  </tr>
</table>
```

## Images

Images can be displayed on a web page using the `<img>` tag. You need to provide the image's source (URL) and optionally, the alternate text:

```html
<img src="image.jpg" alt="Description of the image">
```

## Forms

Forms allow users to input data that can be submitted to a server. Common form elements include text inputs, radio buttons, checkboxes, and buttons:

```html
<form action="/submit" method="post">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" required>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>

  <label for="message">Message:</label>
  <textarea id="message" name="message" required></textarea>

  <input type="submit" value="Submit">
</form>
```

# Cascading Style Sheets (CSS)

CSS is used to style and format HTML elements on a web page. It allows you to control the layout, colors, fonts, and more. You can apply CSS either inline, internally, or externally:

```html
<!-- Inline CSS -->
<p style="color: blue; font-size: 16px;">This paragraph is styled inline.</p>

<!-- Internal CSS -->
<style>
  p {
    color: green;
    font-size: 18px;
  }
</style>

<!-- External CSS (Link to an external stylesheet) -->
<link rel="stylesheet" href="styles.css">
```

# XML (eXtensible Markup Language)

XML is a markup language designed to store and transport data. It uses tags to define elements and their structure:

## Introduction to XML

```xml
<?xml version="1.0" encoding="UTF-8"?>
<bookstore>
  <book category="Fiction">
    <title lang="en">Harry Potter</title>
    <author>J.K. Rowling</author>
    <price>19.99</price>
  </book>
  <book category="Non-Fiction">
    <title lang="en">Intro to XML</title>
    <author>John Doe</author>
    <price>24.95</price>
  </book>
</bookstore>
```

## Document Type Definition (DTD) and XML Schemas

DTD and XML Schemas are used to define the structure and constraints of XML documents:

```xml
<!-- Example DTD -->
<!DOCTYPE bookstore [
  <!ELEMENT bookstore (book*)>
  <!ELEMENT book (title, author, price)>
  <!ELEMENT title (#PCDATA)>
  <!ELEMENT author (#PCDATA)>
  <!ELEMENT price (#PCDATA)>
]>

<!-- Example XML Schema -->
<xs:schema xmlns:xs="http://www.w3.org/2001/XMLSchema">
  <xs:element name="bookstore">
    <xs:complexType>
      <xs:sequence>
        <xs:element name="book" maxOccurs="unbounded">
          <xs:complexType>
            <xs:sequence>
              <xs:element name="title" type="xs:string"/>
              <xs:element name="author" type="xs:string"/>
              <xs:element name="price" type="xs:decimal"/>
            </xs:sequence>
            <xs:attribute name="category" type="xs:string"/>
          </xs:complexType>
        </xs:element>
      </xs:sequence>
    </xs:complexType>
  </xs:element>
</xs:schema>
```

## Document Object Model (DOM) and SAX Parsers in Java

In Java, you can use DOM and SAX parsers to parse and process XML data. The DOM parser builds a tree-like structure of the XML document in memory, while the SAX parser processes the XML document sequentially:

```java
// DOM Parser Example
DocumentBuilderFactory factory = DocumentBuilderFactory.newInstance();
DocumentBuilder builder = factory.newDocumentBuilder();
Document document = builder.parse("data.xml");
// Process the document using DOM methods

// SAX Parser Example
SAXParserFactory saxFactory = SAXParserFactory.newInstance();
SAXParser saxParser = saxFactory.newSAXParser();
XMLHandler handler = new XMLHandler();
saxParser.parse("data.xml", handler);
// Process data using the XMLHandler class
```

---

This section covers common HTML tags for creating lists, tables, displaying images, and working with forms. Additionally, it introduces Cascading Style Sheets (CSS) for styling HTML elements and provides an overview of XML, including defining XML tags, attributes, values, Document Type Definition (DTD), XML Schemas, and parsing XML data using DOM and SAX parsers in Java.

Feel free to explore each topic in detail and experiment with different examples to gain a better understanding. Happy learning!
