﻿using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace feedbackForm
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }
        String fname, lname, email, feedback , contact;

        private void textBox1_TextChanged(object sender, EventArgs e)
        {
            fname= textBox1.Text;
        }

        private void textBox5_TextChanged(object sender, EventArgs e)
        {
            lname= textBox5.Text;
        }

        private void textBox4_TextChanged(object sender, EventArgs e)
        {
            email= textBox4.Text;
        }

        private void textBox3_TextChanged(object sender, EventArgs e)
        {
            contact= textBox3.Text;
        }

        private void textBox2_TextChanged(object sender, EventArgs e)
        {
            feedback = textBox2.Text;
        }

        private void button1_Click(object sender, EventArgs e)
        {
            label6.Text = fname;
            label7.Text = lname;
            label8.Text = email;
            label9.Text = contact;
            label10.Text = feedback;
        }

        private void button2_Click(object sender, EventArgs e)
        {
            textBox1.Text = null;
            textBox2.Text = null;
            textBox3.Text = null;
            textBox4.Text = null;
            textBox5.Text = null;        
        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void label3_Click(object sender, EventArgs e)
        {

        }

        private void label4_Click(object sender, EventArgs e)
        {

        }

        private void label5_Click(object sender, EventArgs e)
        {

        }
    }
}
