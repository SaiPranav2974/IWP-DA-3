<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>Ordered Menu Details</title>
                <style>
                    table {
                        border-collapse: collapse;
                        width: 100%;
                    }
                    th, td {
                        border: 1px solid black;
                        padding: 8px;
                        text-align: left;
                    }
                    th {
                        background-color: lightgray;
                    }
                    .red {
                        color: red;
                    }
                    .blue {
                        color: blue;
                    }
                </style>
            </head>
            <body>
                <h2>Ordered Menu Details</h2>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                    <xsl:for-each select="food_order/items/item">
                        <tr>
                            <td><xsl:value-of select="name"/></td>
                            <td><xsl:value-of select="quantity"/></td>
                            <td>
                                <xsl:choose>
                                    <xsl:when test="price &gt; 500">
                                        <span class="red"><xsl:value-of select="price"/></span>
                                    </xsl:when>
                                    <xsl:otherwise>
                                        <span class="blue"><xsl:value-of select="price"/></span>
                                    </xsl:otherwise>
                                </xsl:choose>
                            </td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
