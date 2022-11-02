package com.example.chatbotspring.data.entities;

import lombok.Getter;
import lombok.Setter;

import javax.persistence.Entity;
import javax.persistence.Table;

@Entity
@Table(name = "recommendations")
@Getter
@Setter
public class Recommendation extends BaseEntity {
    private String recommendation;
    private String diseaseName;
}
